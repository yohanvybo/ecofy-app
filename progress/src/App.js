import React from "react";
import "./App.css";
import mondaySdk from "monday-sdk-js";
import "monday-ui-react-core/dist/main.css"
//Explore more Monday React Components here: https://style.monday.com/
import IconButton from "monday-ui-react-core/dist/Button.js"
import Tooltip from "monday-ui-react-core/dist/Tooltip.js"
import LinearProgressBar from "monday-ui-react-core/dist/LinearProgressBar.js"

const monday = mondaySdk();


let settings = {};
let dark = false;
let databoardid = 0;
let admin = false;
let userid = 0;
let today = new Date().toISOString().split('T')[0];
let loaded = false;
let transportarray=[];
let dietarray=[];

//GET CONTEXT
monday.get("context").then(res => {
    console.log(res);
    if (res.data.theme === 'dark') {
        dark = true;
    }

    userid = res.data.user.id;
    admin = res.data.user.is_admin;


    //CHECK IF GREENIFY DATA BOARD EXIST
    monday.api(`query { boards(limit:100) { id, name } }`).then(res => {
        console.log(res);

        for (let board of res.data.boards) {
            if (board.name === "Greenify Data Board") {
                databoardid = board.id;

            }
            console.log(board.name);
        }


        if (databoardid === 0) {

            if (admin === true) {

                console.log('suuu');
                this.createBoard();

            } else {

            }
            loaded = true;

        }else{

            monday.api(`
query{
  boards(ids:${databoardid}){
    groups(ids:topics){
    items {
      column_values(ids:[people,status]){
        additional_info
        value
      }
    }
    }
  }
}`).then(res => {

                for (let items of res.data.boards.groups.items) {

                    // if(settings.restricted===true){
                    // if(items[0].value.personsAndTeam.id in participants){

                        transportarray.push(items.columns_values[0]);

                    // }
                    // }

                }


                });

            }



    });


});


// monday.get("settings").then(res => {
//     settings = res
// })


//NEW ITEM

// mutation{
//     create_item (board_id: 2941210958, group_id: "topics", item_name: "pfeffff" , column_values  :  "{\"status_1\" : {\"label\" : \"Beef\"},\"status\" : {\"label\" : \"Organic\"},\"people\" : \"32022286\",\"date\" : {\"date\" : \"2022-07-14\"}  }"  ) {
//         id
//     }
// }


class App extends React.Component {
    constructor(props) {
        super(props);

        // Default state
        this.state = {

            settings: {
                mode: 1,
            },
            name: "",
            part: 1,
            choice1: 0,
            choice2: 50,
            userscore: 95,
            teamscore: 95,
            progressUser: -20,
            progressTeam: -20,
            multiValues: [{
                value: 50,
                color: '#00ca72'
            }, {
                value: 100,
                color: 'whitesmoke'
            }]
        };
    }

    componentDidMount() {
        // TODO: set up event listeners


        // if (databoardid === 0) {
        //
        //
        //     if (admin === true) {
        //
        //
        //     } else {
        //
        //
        //     }
        //
        //
        // }
    }


    createBoard() {
        console.log('suuu2');

        //CONFIRM NEW SETUP
        monday.execute("confirm", {
            message: "Want to create ne board?",
            confirmButton: "Let's go!",
            cancelButton: "No way",
            excludeCancelButton: false
        }).then((res) => {
            console.log(res.data);
            // {"confirm": true}
            if (res.data.confirm === true) {

                //CREATE GREENIFY DATA BOARD
                monday.api(`mutation {
 create_board(
  board_name:"Greenify Admin Data",
  board_owner_ids:[${userid}],
  board_kind:private
) { id } }`).then(res => {
                    console.log(res);
                    databoardid = res.data.create_board.id;


                    //Create Columns
                    // createColumn1: create_column(board_id:${databoardid},column_type:people,title:Participant){ id }
                    monday.api(`mutation {
      createColumn1: create_column(board_id:${databoardid},column_type:date,title:Date){ id }
   createColumn2: create_column(board_id:${databoardid},column_type:status,title:Transportation){ id }
    createColumn3: create_column(board_id:${databoardid},column_type:status,title:Alimentation){ id }
      createColumn4: create_column(board_id:${databoardid},column_type:numbers,title:Points){ id } 
  }`).then(res => {


                        //NOTICE
                        monday.execute("notice", {
                            message: "Greenify configured",
                            type: "success", // or "error" (red), or "info" (blue)
                            timeout: 5000,
                        });

                    });


                });
            }
        });

    }


   


    resetPoints() {
        //RESET
        monday.execute("confirm", {
            message: "Are you sure?",
            confirmButton: "Let's go!",
            cancelButton: "No way",
            excludeCancelButton: false
        }).then((res) => {
            console.log(res.data);
            // {"confirm": true}
            if (res.data.confirm === true) {
                //PUT FUNCTION RESET
            }
        });
    }

    render() {
        return <div className="App">

            <div className={` ${dark ? "dark-app-theme" : ""}`}>
                <div className={` ${loaded ? "loaded" : "not-loaded"}`}>


                    {/*NO DATA BOARD*/}
                    {databoardid === 0 &&
                        <div className="scale-up">

                            {/*ADMIN*/}
                            {admin === true &&

                                <div>
                                    <h2 className="greenify-h2">Setup Greenify for participants</h2>

                                    <div

                                        style={{
                                            display: "flex",
                                            justifyContent: "space-evenly",
                                            alignItems: "center",
                                            width: "100%"
                                        }}>

                                        <Tooltip content="Setup new board for participants">
                                            <div className="monday-storybook-tooltip_icon-wrapper">
                                                <IconButton onClick={() => this.createBoard()}
                                                            kind={IconButton.kinds.PRIMARY}
                                                            ariaLabel="My primary IconButton"
                                                            size={IconButton.sizes.LARGE}
                                                            color={IconButton.colors.POSITIVE}
                                                            className={'greenify-btn'}>
                                                    <svg width="49" height="49" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 640 512" style={{margin: "0px -5px"}}>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              fill="currentColor"
                                                              d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z"/>

                                                    </svg>
                                                    Continue
                                                </IconButton>
                                            </div>
                                        </Tooltip>


                                        {/*<Tooltip content="Cancel">*/}
                                        {/*<div className="monday-storybook-tooltip_icon-wrapper">*/}
                                        {/*<IconButton onClick={() => this.clickChoice1("Personal")}*/}
                                        {/*className={" greenify-btn"}*/}
                                        {/*kind={IconButton.kinds.PRIMARY} ariaLabel="My tertiary IconButton"*/}
                                        {/*size={IconButton.sizes.LARGE} color={IconButton.colors.NEGATIVE}>*/}
                                        {/*<svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"*/}
                                        {/*viewBox="0 0 640 512">*/}
                                        {/*<path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"*/}
                                        {/*d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z"/>*/}
                                        {/*</svg>*/}
                                        {/*</IconButton>*/}
                                        {/*</div>*/}
                                        {/*</Tooltip>*/}

                                    </div>
                                </div>
                            }
                            {/*NO ADMIN*/}
                            {admin === false &&
                                <h2 className="greenify-h2">You need to be an admin to setup Greenify</h2>
                            }


                        </div>

                    }


                    {/*PART 3 SCORES*/}
                    {this.state.part === 3 &&
                        <div className="scale-up">

                            <div>

                                <div style={{
                                    display: "flex",
                                    justifyContent: "space-evenly",
                                    alignItems: "center",
                                    width: "100%",
                                    marginBottom: "20px",
                                }}>

                                    <Tooltip content="Your score since the start of this month">
                                        <div className="monday-storybook-tooltip_icon-wrapper">
                                            <div ariaLabel="My primary IconButton"
                                                 className={'greenify-score'}>
                                                <h1>{this.state.userscore}</h1>
                                            </div>
                                        </div>
                                    </Tooltip>


                                    <div style={{display: "grid", gridTemplateRows: "auto auto"}}>
                                        {/*POSITION INDIVIDUAL*/}
                                        <div style={{display: "block"}}>
                                            <div className={"info-progress"}>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                         viewBox="0 0 384 512">
                                                        <path fill="grey"
                                                              d="M256 64C256 99.35 227.3 128 192 128C156.7 128 128 99.35 128 64C128 28.65 156.7 0 192 0C227.3 0 256 28.65 256 64zM155.7 170.2C167.3 173.1 179.6 176 192.2 176C232.1 176 269.3 155.8 291 122.4L309.2 94.54C318.8 79.73 338.6 75.54 353.5 85.18C368.3 94.82 372.5 114.6 362.8 129.5L344.7 157.3C326.4 185.4 301.2 207.3 272 221.6V480C272 497.7 257.7 512 240 512C222.3 512 208 497.7 208 480V384H176V480C176 497.7 161.7 512 144 512C126.3 512 112 497.7 112 480V221.4C83.63 207.4 58.94 186.1 40.87 158.1L21.37 129.8C11.57 115 15.54 95.18 30.25 85.37C44.95 75.57 64.82 79.54 74.62 94.25L94.12 123.5C108.5 145 129.2 160.9 152.9 169.3C153.9 169.5 154.8 169.8 155.7 170.2V170.2z"/>
                                                    </svg>
                                                </div>
                                                {this.state.progressUser >= 0 && <div className={"info-progress-data"}>
                                                    +{this.state.progressUser}%
                                                </div>}
                                                {this.state.progressUser < 0 &&
                                                    <div className={"info-progress-data negative"}>
                                                        {this.state.progressUser}%
                                                    </div>}
                                            </div>


                                            <Tooltip content={this.state.userscore}>
                                                <div className="monday-storybook-tooltip_icon-wrapper">

                                                    <div className="linear-progress-bar_block">
                                                        <LinearProgressBar className="linear-progress-bar_small-wrapper"
                                                                           size={LinearProgressBar.sizes.LARGE} multi
                                                                           multiValues={this.state.multiValues}/>

                                                    </div>
                                                </div>
                                            </Tooltip>
                                        </div>

                                        {/*POSITION GROUP*/}
                                        <div style={{display: "block"}}>
                                            <div className={"info-progress"}>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                         viewBox="0 0 640 512">
                                                        <path fill="grey"
                                                              d="M184 88C184 118.9 158.9 144 128 144C97.07 144 72 118.9 72 88C72 57.07 97.07 32 128 32C158.9 32 184 57.07 184 88zM208.4 196.3C178.7 222.7 160 261.2 160 304C160 338.3 171.1 369.8 192 394.5V416C192 433.7 177.7 448 160 448H96C78.33 448 64 433.7 64 416V389.2C26.16 371.2 0 332.7 0 288C0 226.1 50.14 176 112 176H144C167.1 176 190.2 183.5 208.4 196.3V196.3zM64 245.7C54.04 256.9 48 271.8 48 288C48 304.2 54.04 319.1 64 330.3V245.7zM448 416V394.5C468 369.8 480 338.3 480 304C480 261.2 461.3 222.7 431.6 196.3C449.8 183.5 472 176 496 176H528C589.9 176 640 226.1 640 288C640 332.7 613.8 371.2 576 389.2V416C576 433.7 561.7 448 544 448H480C462.3 448 448 433.7 448 416zM576 330.3C585.1 319.1 592 304.2 592 288C592 271.8 585.1 256.9 576 245.7V330.3zM568 88C568 118.9 542.9 144 512 144C481.1 144 456 118.9 456 88C456 57.07 481.1 32 512 32C542.9 32 568 57.07 568 88zM256 96C256 60.65 284.7 32 320 32C355.3 32 384 60.65 384 96C384 131.3 355.3 160 320 160C284.7 160 256 131.3 256 96zM448 304C448 348.7 421.8 387.2 384 405.2V448C384 465.7 369.7 480 352 480H288C270.3 480 256 465.7 256 448V405.2C218.2 387.2 192 348.7 192 304C192 242.1 242.1 192 304 192H336C397.9 192 448 242.1 448 304zM256 346.3V261.7C246 272.9 240 287.8 240 304C240 320.2 246 335.1 256 346.3zM384 261.7V346.3C393.1 335 400 320.2 400 304C400 287.8 393.1 272.9 384 261.7z"/>
                                                    </svg>
                                                </div>
                                                {this.state.progressTeam >= 0 && <div className={"info-progress-data"}>
                                                    +{this.state.progressTeam}%
                                                </div>}
                                                {this.state.progressTeam < 0 &&
                                                    <div className={"info-progress-data negative"}>
                                                        {this.state.progressTeam}%
                                                    </div>}
                                            </div>
                                            <Tooltip content={this.state.teamscore}>
                                                <div className="monday-storybook-tooltip_icon-wrapper">

                                                    <div className="linear-progress-bar_block">
                                                        <LinearProgressBar className="linear-progress-bar_small-wrapper"
                                                                           size={LinearProgressBar.sizes.LARGE} multi
                                                                           multiValues={this.state.multiValues}/>

                                                    </div>
                                                </div>
                                            </Tooltip>
                                        </div>

                                    </div>


                                </div>


                                {/*PRIZES*/}
                                <div className="greenify-prize">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none"
                                             viewBox="0 0 576 512">
                                            <path fill="#ffcb00"
                                                  d="M447.1 96L448 32c0-17.67-14.49-32-32.17-32H160.2C142.5 0 128 14.33 128 32l.0059 64c0 0 0 175.7 112.1 275c9.715 8.604 15.9 20.65 15.9 33.62C256 428.7 236.7 448 212.6 448H208c-26.51 0-47.99 21.49-47.99 48c0 8.836 7.162 16 15.1 16H399.1c8.836 0 15.1-7.164 15.1-16c0-26.51-21.48-48-47.99-48h-4.644c-24.03 0-43.36-19.33-43.36-43.35c0-12.98 6.184-25.02 15.9-33.62C447.1 271.7 447.1 96 447.1 96zM288.1 214.7L243.3 238.3c-4.689 2.465-10.17-1.516-9.271-6.742l8.578-49.98L206.3 146.3C202.5 142.6 204.6 136.2 209.8 135.4l50.26-7.344l22.43-45.43c2.346-4.75 9.119-4.75 11.46 0l22.43 45.43l50.08 7.316c5.244 .7656 7.33 7.219 3.529 10.91l-36.34 35.3l8.58 49.98c.8945 5.227-4.584 9.207-9.273 6.742L288.1 214.7z"/>
                                            <path fill="#FFCB006E"
                                                  d="M193.7 316.9C189.8 311.1 186.2 305.3 182.8 299.4c-47.14-19.35-82.56-45.83-105.4-79.52C49.47 178.6 47.01 135.7 48.38 112h80.39C128.1 101.9 128 96 128 96l.0836-32H27.26C16.16 64 6.537 71.59 3.912 82.38C3.1 85.78-15.71 167.2 37.07 245.9c37.45 55.82 100.6 95.03 187.5 117.4c8.828 2.268 17.76 9.74 15.51 7.75C211.9 346 194.2 317.4 193.7 316.9zM572.1 82.38C569.5 71.59 559.8 64 548.7 64h-100.8l.0812 32c0 0-.0955 5.926-.7654 16h80.39c1.375 23.66-1.093 66.63-29.03 107.8c-22.82 33.69-58.25 60.17-105.4 79.52c-3.402 5.91-7.023 11.73-10.86 17.5c-.5352 .5352-18.2 29.14-46.45 54.16c-2.248 1.99 6.686-5.482 15.51-7.75c86.96-22.34 150.1-61.55 187.5-117.4C591.7 167.2 572.9 85.78 572.1 82.38zM342.2 231.6l-8.58-49.98l36.34-35.3c3.801-3.691 1.715-10.14-3.529-10.91l-50.08-7.316l-22.43-45.43c-2.344-4.75-9.117-4.75-11.46 0l-22.43 45.43L209.8 135.4C204.6 136.2 202.5 142.6 206.3 146.3l36.31 35.27L234 231.6c-.8965 5.227 4.582 9.207 9.271 6.742l44.85-23.57l44.85 23.57C337.7 240.8 343.1 236.8 342.2 231.6z"/>
                                        </svg>
                                    </div>
                                    <div className={"greenify-prize-text"}>Can Choose Company trip</div>
                                </div>


                            </div>
                        </div>
                    }


                </div>

            </div>
        </div>;
    }
}

export default App;
