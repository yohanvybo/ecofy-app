import React from "react";
import "./App.css";
import mondaySdk from "monday-sdk-js";
import "monday-ui-react-core/dist/main.css"
//Explore more Monday React Components here: https://style.monday.com/
import IconButton from "monday-ui-react-core/dist/Button.js"
import Tooltip from "monday-ui-react-core/dist/Tooltip.js"
import LinearProgressBar from "monday-ui-react-core/dist/LinearProgressBar.js"
import axios from 'axios';
import {Loader} from "monday-ui-react-core";

// import { Doughnut } from 'react-chartjs-2';
import {Chart as ChartJS, ArcElement} from 'chart.js';
import {Doughnut} from 'react-chartjs-2';

//
ChartJS.register(ArcElement);


const monday = mondaySdk();


let today = new Date().toISOString().split('T')[0];


let weekAgoTime = new Date().getTime() - 604800000;

let account_id = 1;

let doughnutdata = {
    labels: ['Polluting', 'Sustainable', 'Eco-friendly'],
    datasets: [
        {
            label: '# of Votes',
            data: [5, 5, 2],
            backgroundColor: [


                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(0, 202, 114,1)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(0, 202, 114, 0.2)',
            ],
            borderWidth: 1,
        },
    ],
};


//NEEW ITEM

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
            choice2: 0,

            userscore: 0,
            teamscore: 0,
            progressUser: 0,
            progressTeam: 0,
            multiValuesUser: [
                {
                    value: 50,
                    color: '#00ca72'
                }, {
                    value: 70,
                    color: '#FFCE56FF'
                }, {
                    value: 100,
                    color: 'whitesmoke'
                }],
            multiValuesTeam: [
                {
                    value: 50,
                    color: '#00ca72'
                }, {
                    value: 70,
                    color: '#FFCE56FF'
                }, {
                    value: 100,
                    color: 'whitesmoke'
                }],


            guests_allowed: 1,
            prize_visible: 1,
            frequency: 1,
            reward: 'problem data',


            scores: [],
            subscription: [],
            multiplier_persons:false,
            userid: 0,
            username:'',
            accountid: 0,
            admin: false,
            guest: false,
            databoardid: 0,
            dark: false,
            exist: false,

            datachanged: false,

            donutdata: {
                labels: ['Polluting', 'Sustainable', 'Eco-friendly'],
                datasets: [
                    {
                        label: '# of Votes',
                        data: [5, 5, 0],
                        backgroundColor: [


                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(0, 202, 114,1)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(0, 202, 114, 0.2)',
                        ],
                        borderWidth: 1,
                    },
                ],
            },

        };
    }

    componentDidMount() {
        // TODO: set up event listeners


// monday.get("settings").then(res => {
//     settings = res
// })
        //GET CONTEXT
        monday.get("context").then(res => {
            console.log('context');
            console.log(res);
            // if (res.data.theme === 'dark') {
            //     this.setState({dark: true});
            // }


            this.setState({userid: res.data.user.id,
                admin: res.data.user.isAdmin,
                guest: res.data.user.isGuest,
                dark:res.data.theme,
            },()=>{

                monday.api(`query { account { id, name }  me { name } }`).then(res => {

                    console.log(res.data);
                    console.log(res.data.account.id);
                    // account_id = res.data.account.id;
                    // console.log(account_id);
                    this.setState({accountid: res.data.account.id,
                        accountname: res.data.account.name,
                        username:res.data.me.name},()=>{


//GET ACCOUNT INFO
                        axios.get('https://www.profesionalify.com/monday/ecofy/getparticipant?accountid=' + this.state.accountid + '&userid=' + this.state.userid).then(res => {


                            console.log(res);

                            if (res.data.result === 'done') {

                                this.visualizeScore(res);

                            } else {

                                if (res.data.result === 'ok') {


                                    if (res.data.subscription.option1 === 0 && this.state.guest === true) {
                                        // this.setState({exist: true}, () => {
                                        //     this.setState({part: 5}, () => {
                                        //         setTimeout(() => {
                                        //             this.setState({loading: false});
                                        //         }, 2000);
                                        //     });
                                        // });
                                        this.setState({exist: true,
                                            part: 5,
                                            loading: false});

                                    }else{
                                        this.setState({exist: true,
                                            loading: false});

                                    }


                                    // this.setState({exist: true}, () => {
                                    //     setTimeout(() => {
                                    //         this.setState({loading: false});
                                    //     }, 2000);
                                    // });

                                } else {


                                    this.setState({exist: false,
                                        loading: false});

                                }
                            }


                        });


                    });
                    // this.setState({accountname: res.data.account.name});




                })



            });
            // this.setState({admin: res.data.user.isAdmin});
            // this.setState({guest: res.data.user.isGuest});

//GET ACCOUNT INFO

        });


        //GET SETTINGS
        // monday.get("settings").then(res => {
        //     console.log('settings');
        //     console.log(res);
        // })


    }



    visualizeScore(res) {


        // this.state.scores = i.data.scores;
        // this.state.subscription = i.data.subscription;
        this.setState({scores: res.data.scores,
            subscription: res.data.subscription
        },()=>{


            // this.setState({subscription: i.data.subscription});


            let totalpastuserentries = 0;
            let totalcurrentuserentries = 0;
            let totalpastteamentries = 0;
            let totalcurrentteamentries = 0;

            let userentries1 = 0;
            let userentries2 = 0;
            let userentries3 = 0;
            let pastuserentriesscore = 0;
            let currentuserentriesscore = 0;

            let teamentries1 = 0;
            let teamentries2 = 0;
            let teamentries3 = 0;
            let pastteamentriesscore = 0;
            let currentteamentriesscore = 0;

            let totalusers = 0;

            let length = res.data.scores.length;

            if (res.data.scores.length > 0) {

                for (let i = 0; i < length; i++) {


                    if (res.data.scores[i].userid === this.state.userid) {

//USER

                        if (new Date(res.data.scores[i].day + '-22').getTime() > weekAgoTime) {


                            if (res.data.scores[i].choice_1 === 1) {
                                userentries1++;
                                // Organic transportation (walking/cycling) makes negligible emmissions 0 kg CO2
                                currentuserentriesscore = currentuserentriesscore + 0;
                            } else if (res.data.scores[i].choice_1 === 2) {
                                userentries2++;
                                // avg. emissions (bus 0,104 kg CO2 / km) (train 0,054 kg CO2 / km) * avg. commute 25km / 15 miles * 2
                                currentuserentriesscore = currentuserentriesscore + 3.75;
                            } else {
                                userentries3++;
                                // avg. emissions petrol car 0,171 kg CO2 / km * avg. commute 25km / 15 miles * 2
                                currentuserentriesscore = currentuserentriesscore + 8.55;
                            }


                            if (res.data.scores[i].choice_2 === 1) {
                                userentries1++;
                                // avg. serving 0,400 kg * 1 kg CO2/kg
                                currentuserentriesscore = currentuserentriesscore + 0.4;
                            } else if (res.data.scores[i].choice_2 === 2) {
                                userentries2++;
                                // avg. serving 0,340 kg * 6 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                currentuserentriesscore = currentuserentriesscore + 6.3;
                            } else {
                                userentries3++;
                                // avg. serving 0,340 kg * 60 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                currentuserentriesscore = currentuserentriesscore + 20.7;
                            }


                            totalcurrentuserentries++;


                        } else {


                            if (res.data.scores[i].choice_1 === 1) {
                                // Organic transportation (walking/cycling) makes negligible emmissions 0 kg CO2
                                // pasttransportentriesteam = pasttransportentriesteam + 0;
                            } else if (res.data.scores[i].choice_1 === 2) {
                                // avg. emissions (bus 0,104 kg CO2 / km) (train 0,054 kg CO2 / km) * avg. commute 25km / 15 miles * 2
                                pastuserentriesscore = pastuserentriesscore + 3.75;
                            } else {
                                // avg. emissions petrol car 0,171 kg CO2 / km * avg. commute 25km / 15 miles * 2
                                pastuserentriesscore = pastuserentriesscore + 8.55;
                            }


                            if (res.data.scores[i].choice_2 === 1) {
                                // avg. serving 0,400 kg * 1 kg CO2/kg
                                pastuserentriesscore = pastuserentriesscore + 0.4;
                            } else if (res.data.scores[i].choice_2 === 2) {
                                // avg. serving 0,340 kg * 6 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                pastuserentriesscore = pastuserentriesscore + 6.3;
                            } else {
                                // avg. serving 0,340 kg * 60 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                pastuserentriesscore = pastuserentriesscore + 20.7;
                            }


                            totalpastuserentries++;

                        }


                    } else {

                        //NOT USER

                        if (new Date(res.data.scores[i].day + '-22').getTime() > weekAgoTime) {


                            if (res.data.scores[i].choice_1 === 1) {
                                teamentries1++;
                                // Organic transportation (walking/cycling) makes negligible emmissions 0 kg CO2
                                currentteamentriesscore = currentteamentriesscore + 0;
                            } else if (res.data.scores[i].choice_1 === 2) {
                                teamentries2++;
                                // avg. emissions (bus 0,104 kg CO2 / km) (train 0,054 kg CO2 / km) * avg. commute 25km / 15 miles * 2
                                currentteamentriesscore = currentteamentriesscore + 3.75;
                            } else {
                                teamentries3++;
                                // avg. emissions petrol car 0,171 kg CO2 / km * avg. commute 25km / 15 miles * 2
                                currentteamentriesscore = currentteamentriesscore + 8.55;
                            }


                            if (res.data.scores[i].choice_2 === 1) {
                                teamentries1++;
                                // avg. serving 0,400 kg * 1 kg CO2/kg
                                currentteamentriesscore = currentteamentriesscore + 0.4;
                            } else if (res.data.scores[i].choice_2 === 2) {
                                teamentries2++;
                                // avg. serving 0,340 kg * 6 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                currentteamentriesscore = currentteamentriesscore + 6.3;
                            } else {
                                teamentries3++;
                                // avg. serving 0,340 kg * 60 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                currentteamentriesscore = currentteamentriesscore + 20.7;
                            }


                            totalcurrentteamentries++;


                        } else {


                            if (res.data.scores[i].choice_1 === 1) {
                                // Organic transportation (walking/cycling) makes negligible emmissions 0 kg CO2
                                // pasttransportentriesteam = pasttransportentriesteam + 0;
                            } else if (res.data.scores[i].choice_1 === 2) {
                                // avg. emissions (bus 0,104 kg CO2 / km) (train 0,054 kg CO2 / km) * avg. commute 25km / 15 miles * 2
                                pastteamentriesscore = pastteamentriesscore + 3.75;
                            } else {
                                // avg. emissions petrol car 0,171 kg CO2 / km * avg. commute 25km / 15 miles * 2
                                pastteamentriesscore = pastteamentriesscore + 8.55;
                            }


                            if (res.data.scores[i].choice_2 === 1) {
                                // avg. serving 0,400 kg * 1 kg CO2/kg
                                pastteamentriesscore = pastteamentriesscore + 0.4;
                            } else if (res.data.scores[i].choice_2 === 2) {
                                // avg. serving 0,340 kg * 6 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                pastteamentriesscore = pastteamentriesscore + 6.3;
                            } else {
                                // avg. serving 0,340 kg * 60 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                                pastteamentriesscore = pastteamentriesscore + 20.7;
                            }


                            totalpastteamentries++;

                        }


                    }


                }




                if (totalcurrentuserentries === 0) {
                    totalcurrentuserentries = 1;
                }
                if (totalpastuserentries === 0) {
                    totalpastuserentries = 1;
                    this.setState({progressUser: 0,
                        userscore: Math.round((currentuserentriesscore / totalcurrentuserentries) * 7 * 10) / 10});



                } else {

                    this.setState({userscore: Math.round((currentuserentriesscore / totalcurrentuserentries - pastuserentriesscore / totalpastuserentries) * 7),
                        progressUser: 0 - Math.round((((currentuserentriesscore / totalcurrentuserentries) - (pastuserentriesscore / totalpastuserentries)) / (pastuserentriesscore / totalpastuserentries)) * 100)});


                }

                // console.log( this.state.donutdata);
                // this.state.donutdata.datasets.data=[Math.round(userentries1 / totalcurrentuserentries * 100),Math.round(userentries2 / totalcurrentuserentries * 100),Math.round(userentries3 / totalcurrentuserentries * 100)];


                // Doughnut.data.datasets[0].data[2] = 50; // Would update the first dataset's value of 'March' to be 50






                if (totalcurrentteamentries === 0) {
                    totalcurrentteamentries = 1;
                }
                if (totalpastteamentries === 0) {
                    totalpastteamentries = 1;
                    this.setState({progressTeam: 0,
                        teamscore: Math.round((currentteamentriesscore / totalcurrentteamentries) * 70 * this.state.subscription.participants) / 10});



                } else {

                    this.setState({teamscore: Math.round((currentteamentriesscore / totalcurrentteamentries - pastteamentriesscore / totalpastteamentries) * 7 * this.state.subscription.participants),
                        progressTeam: 0 - Math.round((((currentteamentriesscore / totalcurrentteamentries) - (pastteamentriesscore / totalpastteamentries)) / (pastteamentriesscore / totalpastteamentries)) * 100)});


                }


                this.setState({
                    multiValuesUser: [
                        {
                            value: userentries1 / totalcurrentuserentries * 100,
                            color: '#00ca72'
                        }, {
                            value: (userentries2 + userentries1) / totalcurrentuserentries * 100,
                            color: '#FFCE56FF'
                        }, {
                            value: 100,
                            color: 'whitesmoke'
                        }],
                    multiValuesTeam: [
                        {
                            value: teamentries1 / totalcurrentteamentries * 100,
                            color: '#00ca72'
                        }, {
                            value: (teamentries2 + teamentries1) / totalcurrentteamentries * 100,
                            color: '#FFCE56FF'
                        }, {
                            value: 100,
                            color: 'whitesmoke'
                        }],
                    guests_allowed: this.state.subscription.option1,
                    donutdata: {
                        labels: ['Polluting', 'Sustainable', 'Eco-friendly'],
                        datasets: [
                            {
                                label: '# of Votes',
                                data: [Math.round(userentries3 / totalcurrentuserentries * 100), Math.round(userentries2 / totalcurrentuserentries * 100), Math.round(userentries1 / totalcurrentuserentries * 100)],
                                backgroundColor: [


                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(0, 202, 114,1)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(0, 202, 114, 0.2)',
                                ],
                                borderWidth: 1,
                            },
                        ],
                    },
                    frequency: this.state.subscription.option3,
                    reward: this.state.subscription.reward,
                    exist: true,
                    part: 3,
                    loading: false,



                });











                // let generaldifference = ((currentteamentriesscore) / totalcurrentuserentries - (pastteamentriesscore) / totalpastuserentries) * 7;
                //
                // console.log('Approximated weekly emissions of the team differed by:' + generaldifference + 'kg CO2');

            } else {

                this.setState({guests_allowed: this.state.subscription.option1,
                    frequency: this.state.subscription.option3,
                    reward: this.state.subscription.reward,
                    part: 4,
                    exist: true,
                    loading: false

                });



            }



        });
    }



    clickChoice1(i) {
        this.setState({choice1: i,
            part: 2});


        // if (this.state.settings.mode === 1) {
        //     this.setState({});
        // } else {
        //     this.setState({part: 3});
        // }
    }

//     clickChoice2(i) {
//
//         this.setState({choice2: i},() => {
//
//             monday.api(`mutation{
//     create_item (board_id: ${this.state.databoardid}, group_id: "topics", item_name: "vote" , column_values  :  "{\\"status_1\\" : {\\"label\\" : \\"${this.state.choice2}\\"},\\"status\\" : {\\"label\\" : \\"${this.state.choice1}\\"},\\"people\\" : \\"${this.state.userid}\\",\\"date\\" : {\\"date\\" : \\"${today}\\"}  }"  ) {
//         id
//     }
// }`).then(res => {
//                 console.log(res);
//
//                 this.setState({part: 3});
//
//
//             });
//         });

    clickChoice2(i) {

        this.setState({choice2: i}, () => {

            axios.get('https://www.profesionalify.com/monday/ecofy/savescore?accountid=' + this.state.accountid + '&userid=' + this.state.userid + '&choice_1=' + this.state.choice1 + '&choice_2=' + this.state.choice2 + '&name='+this.state.username).then(res => {


                this.visualizeScore(res);


            });
        });


    }



    PerPerson(i){

        if(this.state.multiplier_persons===true){
            if(i===false){
                this.setState({
                    multiplier_persons:false,
                    teamscore: Math.round(this.state.teamscore/this.state.subscription.participants*10)/10
                })
            }
        }else{
            if(i===true){
                this.setState({
                    multiplier_persons:true,
                    teamscore: Math.round(this.state.teamscore*this.state.subscription.participants*10)/10
                })
            }
        }

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

            <div className={` ${this.state.dark !=='light' ? "dark-app-theme" : ""}`}>


                {this.state.loading &&
                    <Loader size={40}/>
                }


                {this.state.loading === false &&
                    <div>
                        {this.state.exist === false &&
                            <div>


                                {this.state.part === 1 &&
                                    <div

                                        className="panel-central text-center"

                                    >


                                        <h1 className="greenify-h2">Ecofy is not setup</h1>

                                        <p className="greenify-h2">Use the "Admin View" to setup Ecofy for everybody</p>



                                        <div>
                                            <IconButton onClick={() => this.setState({part: 2})}
                                                        kind={IconButton.kinds.SECONDARY}
                                                        ariaLabel="My primary IconButton"
                                                        size={IconButton.sizes.LARGE}
                                                        color={IconButton.colors.POSITIVE}
                                                        className={'mt-4'} style={{width: '164.125px'}}>

                                                What is Ecofy?
                                            </IconButton>
                                        </div>
                                    </div>
                                }


                                {this.state.part === 2 &&
                                    <div>
                                        <h3 className="greenify-h2 h3-what-is-ecofy">Ecofy create a simple daily routine
                                            so
                                            your team can be aware of their climate impact</h3>


                                        <div className={'image-presentation-container'}>
                                            <img src={'/images/image-presentation-1.png'}
                                                 className={'image-presentation-1'}/>
                                            <img src={'/images//image-presentation-2.png'}
                                                 className={'image-presentation-2'}/>
                                        </div>

                                        <p className="greenify-h2 h3-what-is-ecofy">Use the admin widget/view to setup
                                            Ecofy</p>


                                    </div>


                                }
                            </div>
                        }


                        {this.state.exist &&
                            <div>

                                {/*PART 1 TRANSPORT*/}
                                {this.state.part === 1 &&
                                    <div className="scale-up">
                                        <h2 className="greenify-h2"> ??How did you come to work? </h2>


                                        <div className="panel-central flex">

                                            <Tooltip content="Organic: Walking or riding Bycicle">
                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                    <IconButton onClick={() => this.clickChoice1(1)}
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
                                                    </IconButton>
                                                </div>
                                            </Tooltip>


                                            <Tooltip content="Public Transport: Bus or Subway">
                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                    <IconButton onClick={() => this.clickChoice1(2)}
                                                                kind={IconButton.kinds.PRIMARY}
                                                                className={"yellow-btn greenify-btn"}
                                                                ariaLabel="My secondary IconButton"
                                                                size={IconButton.sizes.LARGE}>
                                                        <svg width="33" height="33" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 448 512">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  fill="currentColor"
                                                                  d="M352 0C405 0 448 42.98 448 96V352C448 399.1 412.8 439.7 366.9 446.9L412.9 492.9C419.9 499.9 414.9 512 404.1 512H365.3C356.8 512 348.6 508.6 342.6 502.6L288 448H160L105.4 502.6C99.37 508.6 91.23 512 82.75 512H43.04C33.06 512 28.06 499.9 35.12 492.9L81.14 446.9C35.18 439.7 0 399.1 0 352V96C0 42.98 42.98 0 96 0H352zM64 224C64 241.7 78.33 256 96 256H176C193.7 256 208 241.7 208 224V128C208 110.3 193.7 96 176 96H96C78.33 96 64 110.3 64 128V224zM272 96C254.3 96 240 110.3 240 128V224C240 241.7 254.3 256 272 256H352C369.7 256 384 241.7 384 224V128C384 110.3 369.7 96 352 96H272zM96 320C78.33 320 64 334.3 64 352C64 369.7 78.33 384 96 384C113.7 384 128 369.7 128 352C128 334.3 113.7 320 96 320zM352 384C369.7 384 384 369.7 384 352C384 334.3 369.7 320 352 320C334.3 320 320 334.3 320 352C320 369.7 334.3 384 352 384z"/>
                                                        </svg>
                                                    </IconButton>
                                                </div>
                                            </Tooltip>


                                            <Tooltip content="Personal Transport: Car or Motorcycle">
                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                    <IconButton onClick={() => this.clickChoice1(3)}
                                                                className={" greenify-btn"}
                                                                kind={IconButton.kinds.PRIMARY}
                                                                ariaLabel="My tertiary IconButton"
                                                                size={IconButton.sizes.LARGE}
                                                                color={IconButton.colors.NEGATIVE}>
                                                        <svg width="40" height="40" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 640 512">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  fill="currentColor"
                                                                  d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z"/>
                                                        </svg>
                                                    </IconButton>
                                                </div>
                                            </Tooltip>


                                        </div>
                                    </div>
                                }

                                {/*PART 2 ALIMENTATION*/}
                                {this.state.part === 2 &&
                                    <div className="scale-up">
                                        <h2>??What type of meat did you eat?</h2>


                                        <div className="panel-central flex">

                                            {/*Find more info of C02 emissions at https://www.visualcapitalist.com/visualising-the-greenhouse-gas-impact-of-each-food/*/}

                                            <Tooltip content="None: <1kg C02/kg">
                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                    <IconButton onClick={() => this.clickChoice2(1)}
                                                                kind={IconButton.kinds.PRIMARY}
                                                                ariaLabel="My primary IconButton"
                                                                size={IconButton.sizes.LARGE}
                                                                color={IconButton.colors.POSITIVE}
                                                                className={'greenify-btn'}>
                                                        <svg width="37" height="37" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 512 512">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  fill="currentColor"
                                                                  d="M495.8 288H16.19C7.055 288-.6992 295.8 .0508 304.9c6.758 76.38 58.28 139.4 128.1 163.9V480c0 17.62 14.45 32 32.09 32h192.2c17.65 0 32.04-14.38 32.04-32v-11.5c69.46-24.62 120.8-87.5 127.4-163.6C512.7 295.8 505.1 288 495.8 288zM320 224c0 11.28 2.305 21.95 5.879 32h180.2C509.7 245.9 512 235.3 512 224c0-53.02-42.98-96-96-96S320 170.1 320 224zM96.09 256h73.29L84.69 171.3c-6.25-6.25-6.25-16.38 0-22.62s16.38-6.25 22.62 0L208 249.4V112C208 103.2 215.2 96 224 96s16 7.156 16 16V256h52.66c-2.875-10.38-4.375-21.12-4.5-32c.125-70.63 57.39-127.9 128-128c2.625 0 5.127 .625 7.752 .75C406.3 76.88 380.9 64 352.2 64c-8.504 .125-17.1 1.411-25.23 3.786C309.3 26.66 268.9 0 224.1 0C179.4 0 138.9 26.62 121.2 67.75C113.1 65.38 104.6 64.13 96.09 64C43.07 64 .0508 107 .0508 160S43.07 256 96.09 256z"/>
                                                        </svg>

                                                    </IconButton>
                                                </div>
                                            </Tooltip>


                                            <Tooltip content="Chicken/Pig/Fish: 6kg C02/kg">
                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                    <IconButton onClick={() => this.clickChoice2(2)}
                                                                kind={IconButton.kinds.PRIMARY}
                                                                className={"yellow-btn greenify-btn"}
                                                                ariaLabel="My secondary IconButton"
                                                                size={IconButton.sizes.LARGE}>
                                                        <svg width="36" height="36" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 512 512">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  fill="currentColor"
                                                                  d="M511.1 169.2c0 43.27-16.51 86.6-49.49 119.6c-35.49 35.5-78.45 63.12-142.4 63.12L234.2 351.1l-40.48 40.58c-6.102 6.103-8.917 13.98-8.917 22.14c0 13.69 7.243 18.23 7.243 37.02c0 33.68-27.44 60.3-60.36 60.3c-15.58 0-31.04-6.024-42.7-17.69c-11.49-11.58-16.81-26.41-16.81-41.42c0-4.914 .5723-9.865 1.682-14.71c-4.84 1.11-9.793 1.683-14.72 1.683c-42.25 0-59.13-36.72-59.13-59.58c0-11.46 3.27-22.98 9.99-33.09c11.42-17.41 30.52-27.19 50.32-27.19c18.99 0 23.06 7.244 37.06 7.244c8.182 0 16.09-2.815 22.11-8.918l40.56-40.48l.0502-85.9c0-63.1 27.61-107 63.1-142.4c33.06-33.06 76.3-49.57 119.6-49.57s86.62 16.53 119.6 49.59C495.5 82.6 511.1 125.9 511.1 169.2z"/>
                                                        </svg>
                                                    </IconButton>
                                                </div>
                                            </Tooltip>


                                            <Tooltip content="Beef: 60kg C02/kg">
                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                    <IconButton onClick={() => this.clickChoice2(3)}
                                                                className={" greenify-btn"}
                                                                kind={IconButton.kinds.PRIMARY}
                                                                ariaLabel="My tertiary IconButton"
                                                                size={IconButton.sizes.LARGE}
                                                                color={IconButton.colors.NEGATIVE}>
                                                        <svg width="39" height="39" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 576 512">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  fill="currentColor"
                                                                  d="M368.9 96c-27.38 0-51.88 23.71-62.63 60.33c-6.25 21.38-26.75 106.2-173.1 169.1c-138.9 60.38 163.9 169.5 321.3-9.792C492.5 273 487.1 190.5 442.8 140C417.9 111.6 391.6 96 368.9 96zM384 255.9c-17.62 0-32-14.25-32-32c0-17.62 14.38-32 32-32s32 14.38 32 32C416 241.6 401.6 255.9 384 255.9zM514.9 76.63C467.9 23.13 416.3 0 368.9 0c-70.63 0-131.9 51.13-154.8 129.4c-49.13 139.9-212.8 83.01-214.1 222.3c-1.25 121.6 139.3 164.6 256 160c87.75-3.375 187.4-37.08 270.5-131.8C596.8 299.8 591.6 164 514.9 76.63zM478.4 337.6c-76.13 86.75-164.2 107.8-224.7 110.1c-37.75 1.375-131.6-6.503-171.3-46.63c-2.5-2.5-59.53-61.76 37.97-104.1c71.63-31.25 132.3-71.26 155.2-149.6c14.88-50.63 51.5-83.38 93.38-83.38c32.5 0 66.35 19 97.98 54.88C521.1 181.8 527.3 281.9 478.4 337.6z"/>
                                                        </svg>
                                                    </IconButton>
                                                </div>
                                            </Tooltip>


                                        </div>
                                    </div>
                                }


                                {/*PART 3 SCORES*/}
                                {this.state.part === 3 &&
                                    <div className="scale-up">

                                        <div>
                                            <div style={{display: "grid", gridTemplateColumns: "auto auto"}}>
                                                <h3 className="">Weekly Progress</h3>
                                                <div className="per-person">



                                                    <div
                                                        className="monday-style-button-group-component monday-style-button-group-component--kind-secondary">
                                                        <div role="group"
                                                             aria-label="button group aria label"
                                                             className="monday-style-button-group-component__buttons-container"
                                                             aria-disabled="false">
                                                            <button type="button"
                                                                    onClick={() => this.PerPerson(false)}
                                                                    className={` ${this.state.multiplier_persons === false ? "monday-style-button--color-primary-active selected" : ""}    monday-style-button-group-component__option-text  monday-style-button monday-style-button--size-small monday-style-button--kind-tertiary monday-style-button--color-primary has-style-size  monday-style-button--left-flat monday-style-button--prevent-click-animation`}
                                                                    data-testid="button"
                                                                    aria-disabled="false"
                                                                    style={{
                                                                        width: "86.17px",
                                                                        height: "31.9844px"
                                                                    }}>Per
                                                                Person
                                                            </button>
                                                            <button type="button"
                                                                    onClick={() => this.PerPerson(true)}
                                                                    className={` ${this.state.multiplier_persons === true ? "monday-style-button--color-primary-active selected" : ""}    monday-style-button-group-component__option-text  monday-style-button monday-style-button--size-small monday-style-button--kind-tertiary monday-style-button--color-primary has-style-size  monday-style-button--left-flat monday-style-button--prevent-click-animation`}
                                                                    data-testid="button"
                                                                    aria-disabled="false"
                                                                    style={{
                                                                        width: "49.2188px",
                                                                        height: "31.9844px"
                                                                    }}>Total
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div style={{
                                                display: "grid",
                                                justifyContent: "space-evenly",
                                                alignItems: "center",
                                                width: "100%",
                                                marginBottom: "20px",
                                                gridTemplateColumns:"auto auto"
                                            }}>

                                                {/*<Tooltip content="Your score since the start of this month">*/}
                                                {/*    <div className="monday-storybook-tooltip_icon-wrapper">*/}
                                                {/*        <div onClick={() => this.setState({part: 1})} ariaLabel="My primary IconButton"*/}
                                                {/*             className={'greenify-score'}>*/}
                                                {/*            <h1>{this.state.userscore}</h1>*/}
                                                {/*        </div>*/}
                                                {/*    </div>*/}
                                                {/*</Tooltip>*/}






                                                <div style={{height: '100px', width: '100px', marginRight: '20px'}}>

                                                        <Doughnut data={this.state.donutdata}/>

                                                </div>

                                                <div style={{display: "grid", gridTemplateRows: "auto auto"}}>
                                                    {/*POSITION INDIVIDUAL*/}
                                                    <div style={{display: "block"}}>
                                                        <div className={"info-progress"}>
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                     height="28"
                                                                     viewBox="0 0 384 512">
                                                                    <path fill="grey"
                                                                          d="M256 64C256 99.35 227.3 128 192 128C156.7 128 128 99.35 128 64C128 28.65 156.7 0 192 0C227.3 0 256 28.65 256 64zM155.7 170.2C167.3 173.1 179.6 176 192.2 176C232.1 176 269.3 155.8 291 122.4L309.2 94.54C318.8 79.73 338.6 75.54 353.5 85.18C368.3 94.82 372.5 114.6 362.8 129.5L344.7 157.3C326.4 185.4 301.2 207.3 272 221.6V480C272 497.7 257.7 512 240 512C222.3 512 208 497.7 208 480V384H176V480C176 497.7 161.7 512 144 512C126.3 512 112 497.7 112 480V221.4C83.63 207.4 58.94 186.1 40.87 158.1L21.37 129.8C11.57 115 15.54 95.18 30.25 85.37C44.95 75.57 64.82 79.54 74.62 94.25L94.12 123.5C108.5 145 129.2 160.9 152.9 169.3C153.9 169.5 154.8 169.8 155.7 170.2V170.2z"/>
                                                                </svg>
                                                            </div>

                                                            <Tooltip content="Aproximate weekly impact difference ">
                                                                <div
                                                                    className="info-progress-data-1">{this.state.userscore >= 0 &&
                                                                    <span>+</span>} {this.state.userscore} kg CO2
                                                                </div>
                                                            </Tooltip>

                                                            {this.state.progressUser >= 0 &&
                                                                <div className={"info-progress-data"}>
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
                                                                    <LinearProgressBar
                                                                        className="linear-progress-bar_small-wrapper"
                                                                        size={LinearProgressBar.sizes.LARGE} multi
                                                                        multiValues={this.state.multiValuesUser}/>

                                                                </div>
                                                            </div>
                                                        </Tooltip>
                                                    </div>

                                                    {/*POSITION GROUP*/}
                                                    <div style={{display: "block"}}>
                                                        <div className={"info-progress"}>
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                     height="28"
                                                                     viewBox="0 0 640 512">
                                                                    <path fill="grey"
                                                                          d="M184 88C184 118.9 158.9 144 128 144C97.07 144 72 118.9 72 88C72 57.07 97.07 32 128 32C158.9 32 184 57.07 184 88zM208.4 196.3C178.7 222.7 160 261.2 160 304C160 338.3 171.1 369.8 192 394.5V416C192 433.7 177.7 448 160 448H96C78.33 448 64 433.7 64 416V389.2C26.16 371.2 0 332.7 0 288C0 226.1 50.14 176 112 176H144C167.1 176 190.2 183.5 208.4 196.3V196.3zM64 245.7C54.04 256.9 48 271.8 48 288C48 304.2 54.04 319.1 64 330.3V245.7zM448 416V394.5C468 369.8 480 338.3 480 304C480 261.2 461.3 222.7 431.6 196.3C449.8 183.5 472 176 496 176H528C589.9 176 640 226.1 640 288C640 332.7 613.8 371.2 576 389.2V416C576 433.7 561.7 448 544 448H480C462.3 448 448 433.7 448 416zM576 330.3C585.1 319.1 592 304.2 592 288C592 271.8 585.1 256.9 576 245.7V330.3zM568 88C568 118.9 542.9 144 512 144C481.1 144 456 118.9 456 88C456 57.07 481.1 32 512 32C542.9 32 568 57.07 568 88zM256 96C256 60.65 284.7 32 320 32C355.3 32 384 60.65 384 96C384 131.3 355.3 160 320 160C284.7 160 256 131.3 256 96zM448 304C448 348.7 421.8 387.2 384 405.2V448C384 465.7 369.7 480 352 480H288C270.3 480 256 465.7 256 448V405.2C218.2 387.2 192 348.7 192 304C192 242.1 242.1 192 304 192H336C397.9 192 448 242.1 448 304zM256 346.3V261.7C246 272.9 240 287.8 240 304C240 320.2 246 335.1 256 346.3zM384 261.7V346.3C393.1 335 400 320.2 400 304C400 287.8 393.1 272.9 384 261.7z"/>
                                                                </svg>
                                                            </div>


                                                            <Tooltip content="Average weekly impact per person multiplied by number of participants ">
                                                                <div
                                                                    className="info-progress-data-1">{this.state.teamscore >= 0 &&
                                                                    <span>+</span>} {this.state.teamscore} kg CO2
                                                                </div>
                                                            </Tooltip>

                                                            {this.state.progressTeam >= 0 &&
                                                                <div className={"info-progress-data"}>
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
                                                                    <LinearProgressBar
                                                                        className="linear-progress-bar_small-wrapper"
                                                                        size={LinearProgressBar.sizes.LARGE} multi
                                                                        multiValues={this.state.multiValuesTeam}/>

                                                                </div>
                                                            </div>
                                                        </Tooltip>
                                                    </div>

                                                </div>





                                                {/*PRIZES*/}
                                                {this.state.subscription.option2 === 1 &&
                                                    <div className="greenify-prize">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                 height="28"
                                                                 fill="none"
                                                                 viewBox="0 0 576 512">
                                                                <path fill="#ffcb00"
                                                                      d="M447.1 96L448 32c0-17.67-14.49-32-32.17-32H160.2C142.5 0 128 14.33 128 32l.0059 64c0 0 0 175.7 112.1 275c9.715 8.604 15.9 20.65 15.9 33.62C256 428.7 236.7 448 212.6 448H208c-26.51 0-47.99 21.49-47.99 48c0 8.836 7.162 16 15.1 16H399.1c8.836 0 15.1-7.164 15.1-16c0-26.51-21.48-48-47.99-48h-4.644c-24.03 0-43.36-19.33-43.36-43.35c0-12.98 6.184-25.02 15.9-33.62C447.1 271.7 447.1 96 447.1 96zM288.1 214.7L243.3 238.3c-4.689 2.465-10.17-1.516-9.271-6.742l8.578-49.98L206.3 146.3C202.5 142.6 204.6 136.2 209.8 135.4l50.26-7.344l22.43-45.43c2.346-4.75 9.119-4.75 11.46 0l22.43 45.43l50.08 7.316c5.244 .7656 7.33 7.219 3.529 10.91l-36.34 35.3l8.58 49.98c.8945 5.227-4.584 9.207-9.273 6.742L288.1 214.7z"/>
                                                                <path fill="#FFCB006E"
                                                                      d="M193.7 316.9C189.8 311.1 186.2 305.3 182.8 299.4c-47.14-19.35-82.56-45.83-105.4-79.52C49.47 178.6 47.01 135.7 48.38 112h80.39C128.1 101.9 128 96 128 96l.0836-32H27.26C16.16 64 6.537 71.59 3.912 82.38C3.1 85.78-15.71 167.2 37.07 245.9c37.45 55.82 100.6 95.03 187.5 117.4c8.828 2.268 17.76 9.74 15.51 7.75C211.9 346 194.2 317.4 193.7 316.9zM572.1 82.38C569.5 71.59 559.8 64 548.7 64h-100.8l.0812 32c0 0-.0955 5.926-.7654 16h80.39c1.375 23.66-1.093 66.63-29.03 107.8c-22.82 33.69-58.25 60.17-105.4 79.52c-3.402 5.91-7.023 11.73-10.86 17.5c-.5352 .5352-18.2 29.14-46.45 54.16c-2.248 1.99 6.686-5.482 15.51-7.75c86.96-22.34 150.1-61.55 187.5-117.4C591.7 167.2 572.9 85.78 572.1 82.38zM342.2 231.6l-8.58-49.98l36.34-35.3c3.801-3.691 1.715-10.14-3.529-10.91l-50.08-7.316l-22.43-45.43c-2.344-4.75-9.117-4.75-11.46 0l-22.43 45.43L209.8 135.4C204.6 136.2 202.5 142.6 206.3 146.3l36.31 35.27L234 231.6c-.8965 5.227 4.582 9.207 9.271 6.742l44.85-23.57l44.85 23.57C337.7 240.8 343.1 236.8 342.2 231.6z"/>
                                                            </svg>
                                                        </div>
                                                        <div className={"greenify-prize-text"}>{this.state.reward}</div>
                                                    </div>
                                                }
                                            </div>





                                        </div>
                                    </div>
                                }


                                {this.state.part === 5 &&
                                    <div className="scale-up">
                                        <h2 className="greenify-h2"> Guest are not allowed to participate </h2>
                                        <p>Sorry , that can be changed by an admin</p>


                                    </div>
                                }

                            </div>
                        }
                    </div>
                }


            </div>


        </div>;
    }


}

export default App;
