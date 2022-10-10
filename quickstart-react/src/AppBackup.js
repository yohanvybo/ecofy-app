import React from "react";
import "./App.css";
import mondaySdk from "monday-sdk-js";
import "monday-ui-react-core/dist/main.css"
//Explore more Monday React Components here: https://style.monday.com/
import IconButton from "monday-ui-react-core/dist/Button.js"
import Tooltip from "monday-ui-react-core/dist/Tooltip.js"
import LinearProgressBar from "monday-ui-react-core/dist/LinearProgressBar.js"

import {
    Divider,
    Loader,
    MultiStepIndicator,
    RadioButton,
    Tab,
    TabPanel,
    TabPanels,
    TabsContext,
    TextField
} from "monday-ui-react-core";
import {TabList} from "monday-ui-react-core";

import axios from 'axios';

import {Transition} from "react-transition-group";

import { Doughnut } from 'react-chartjs-2';
import { Chart as ChartJS, ArcElement } from 'chart.js';


ChartJS.register(ArcElement);





//ADMIN WIDGET


const monday = mondaySdk();


const data = {
    labels: ['Polluting', 'Sustainable', 'Eco-friendly'],
    datasets: [
        {
            label: '# of Votes',
            data: [32, 24, 44],
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

let today = new Date().toISOString().split('T')[0];

let weekAgoTime = new Date().getTime() - 604800000;

let account_id=1;

const defaultStyle = {
    transition: `300ms ease-in-out`,
    opacity: 0,
    transitionDelay:'500ms',
}

const transitionStyles = {
    entering: {
        display: 'none'},
    entered: {display: 'block',
    animation:'fadein 300ms  ease-in-out forwards'},
    exiting: {opacity: 0},
    exited: {display: 'none'},
};

axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': window.csrf_token
};


//GET SUBSCRIPTION BACKEND
// axios.get('https://www.profesionalify.com/monday/ecofy/getcontext').then(res => {
//
//
//
// });


// monday.get("settings").then(res => {
//     settings = res
// })


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
            dark: false,
            loading: true,
            exist:false,
            accountid:0,
            databoardid:0,


            steps:[
    {
    key: "FULFILLED",
    status: MultiStepIndicator.stepStatuses.ACTIVE,
    titleText: "Participants",
    subtitleText: "Configuration"
}, {
            key: "ACTIVE",
                status: MultiStepIndicator.stepStatuses.PENDING,
                titleText: "Prize",
                subtitleText: "Configuration"
        }, {
            key: "PENDING",
                status: MultiStepIndicator.stepStatuses.PENDING,
                titleText: "General",
                subtitleText: "Configuration"
        }],

            guests_allowed:1,
            prize_visible:1,
            frequency:1,


            choice1: 0,
            choice2: 50,


step:1,

            admin: true,
            userid: 0,
            transportscore: 50,
            alimentationscore: 60,
            participationscore:50,
            progressTransport: 4,
            progressAlimentation: -10,
            progressParticipation: 20,
reward:'',


            scores:[],
            subscription:[],

            multiValuesTransport: [
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
            multiValuesAlimentation: [
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
            multiValuesParticipation: [
                {
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
        console.log('didmount');

//GET CONTEXT
        monday.get("context").then(res => {
            console.log('context');
            console.log(res);
            if (res.data.theme === 'dark') {
                this.setState({dark: true});
            }


            this.setState({userid: res.data.user.id});
            this.setState({admin: res.data.user.isAdmin});


//GET ACCOUNT INFO
            monday.api(`query { account { id, name } }`).then(res => {

console.log(res.data);
                console.log(res.data.account.id);
                this.setState({accountid: res.data.account.id});
                this.setState({accountname: res.data.account.name});
                console.log(this.state.accountid);
                account_id=res.data.account.id;
                console.log(account_id);
//GET ACCOUNT INFO
axios.get('https://www.profesionalify.com/monday/ecofy/getadmin?accountid='+account_id).then(res => {


console.log(res);

if(res.data.result==='ok'){

    this.setState({scores:res.data.scores});
    this.setState({subscription:res.data.subscription});


    let totalpastentries=0;
    let totalcurrententries=0;

    let transportentries1=0;
    let transportentries2=0;
    let transportentries3=0;
    let pasttransportentriesteam=0;
    let currenttransportentriesteam=0;

    let dietaryentries1=0;
    let dietaryentries2=0;
    let dietaryentries3=0;
    let pastdietaryentriesteam=0;
    let currentdietaryentriesteam=0;

    let totalusers=0;

    let length=this.state.scores.length;

    if(this.state.scores.length<1) {

        for (let i = 0; i < length; i++) {
            if (new Date(this.state.scores[i].day + '-22').getTime() > weekAgoTime) {


                if (this.state.scores[i].choice_2 === 1) {
                    transportentries1++;
                    // Organic transportation (walking/cycling) makes negligible emmissions 0 kg CO2
                    currenttransportentriesteam = currenttransportentriesteam + 0;
                } else if (this.state.scores[i].choice_2 === 2) {
                    transportentries2++;
                    // avg. emissions (bus 0,104 kg CO2 / km) (train 0,054 kg CO2 / km) * avg. commute 25km / 15 miles * 2
                    currenttransportentriesteam = currenttransportentriesteam + 3.75;
                } else {
                    transportentries3++;
                    // avg. emissions petrol car 0,171 kg CO2 / km * avg. commute 25km / 15 miles * 2
                    currenttransportentriesteam = currenttransportentriesteam + 8.55;
                }


                if (this.state.scores[i].choice_2 === 1) {
                    dietaryentries1++;
                    // avg. serving 0,400 kg * 1 kg CO2/kg
                    currentdietaryentriesteam = currentdietaryentriesteam + 0.4;
                } else if (this.state.scores[i].choice_2 === 2) {
                    dietaryentries2++;
                    // avg. serving 0,340 kg * 6 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                    currentdietaryentriesteam = currentdietaryentriesteam + 6.3;
                } else {
                    dietaryentries3++;
                    // avg. serving 0,340 kg * 60 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                    currentdietaryentriesteam = currentdietaryentriesteam + 20.7;
                }


                totalcurrententries++;


            } else {


                if (this.state.scores[i].choice_1 === 1) {
                    // Organic transportation (walking/cycling) makes negligible emmissions 0 kg CO2
                    // pasttransportentriesteam = pasttransportentriesteam + 0;
                } else if (this.state.scores[i].choice_1 === 2) {
                    // avg. emissions (bus 0,104 kg CO2 / km) (train 0,054 kg CO2 / km) * avg. commute 25km / 15 miles * 2
                    pasttransportentriesteam = pasttransportentriesteam + 3.75;
                } else {
                    // avg. emissions petrol car 0,171 kg CO2 / km * avg. commute 25km / 15 miles * 2
                    pasttransportentriesteam = pasttransportentriesteam + 8.55;
                }


                if (this.state.scores[i].choice_2 === 1) {
                    // avg. serving 0,400 kg * 1 kg CO2/kg
                    pastdietaryentriesteam = pastdietaryentriesteam + 0.4;
                } else if (this.state.scores[i].choice_2 === 2) {
                    // avg. serving 0,340 kg * 6 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                    pastdietaryentriesteam = pastdietaryentriesteam + 6.3;
                } else {
                    // avg. serving 0,340 kg * 60 kg CO2/kg + 0,300 kg * 1 kg CO2/kg
                    pastdietaryentriesteam = pastdietaryentriesteam + 20.7;
                }


                totalpastentries++;

            }


        }


        let generaldifference = ((currentdietaryentriesteam + currenttransportentriesteam) / totalcurrententries - (pastdietaryentriesteam + pasttransportentriesteam) / totalpastentries) * 7;

        console.log('Approximated weekly emissions of the team differed by:' + generaldifference + 'kg CO2');


        if (totalcurrententries === 0) {
            totalcurrententries = 1;
        }

        if (totalpastentries === 0) {
            totalpastentries = 1;
            this.setState({progressParticipation: 0});
            this.setState({participationscore: totalcurrententries});


        } else {
            this.setState({progressParticipation: Math.round(totalcurrententries / totalpastentries)});
            this.setState({participationscore: (totalcurrententries - totalpastentries)});


        }
        this.setState({transportscore: Math.round((currenttransportentriesteam / totalcurrententries - pasttransportentriesteam / totalpastentries) * 7)});
        this.setState({alimentationscore: Math.round((currentdietaryentriesteam / totalcurrententries - pastdietaryentriesteam / totalpastentries) * 7)});

        this.setState({progressTransport: Math.round((((currenttransportentriesteam / totalcurrententries)-(pasttransportentriesteam / totalpastentries)) / (pasttransportentriesteam / totalpastentries))*100)});
        this.setState({progressAlimentation: Math.round((((currentdietaryentriesteam / totalcurrententries)-(pastdietaryentriesteam / totalpastentries)) / (pastdietaryentriesteam / totalpastentries))*100)});



        this.setState({
            multiValuesTransport: [
                {
                    value: transportentries1 / totalcurrententries * 100,
                    color: '#00ca72'
                }, {
                    value: transportentries2 / totalcurrententries * 100,
                    color: '#FFCE56FF'
                }, {
                    value: 100,
                    color: 'whitesmoke'
                }]
        });

        this.setState({
            multiValuesAlimentation: [
                {
                    value: dietaryentries1 / totalcurrententries * 100,
                    color: '#00ca72'
                }, {
                    value: dietaryentries2 / totalcurrententries * 100,
                    color: '#FFCE56FF'
                }, {
                    value: 100,
                    color: 'whitesmoke'
                }]
        });


        this.setState({
            multiValuesParticipation: [
                {
                    value: totalcurrententries / (totalusers * 7) * 100,
                    color: '#00ca72'
                }, {
                    value: 100,
                    color: 'whitesmoke'
                }]
        });


        this.setState({guests_allowed: this.state.subscribtion.option1});
        this.setState({prize_visible: this.state.subscribtion.option2});
        this.setState({frequency: this.state.subscribtion.option3});
        this.setState({reward: this.state.subscribtion.reward});

        this.setState({exist: true});
        this.setState({loading: false});
    }else{

        this.setState({guests_allowed: this.state.subscribtion.option1});
        this.setState({prize_visible: this.state.subscribtion.option2});
        this.setState({frequency: this.state.subscribtion.option3});
        this.setState({reward: this.state.subscribtion.reward});
        this.setState({part: 4});
        this.setState({exist: true});
        this.setState({loading: false});
    }
    }else{

        this.setState({loading: false});
    }




});



            })


        });


        //GET SETTINGS
        monday.get("settings").then(res => {
            console.log('settings');
            console.log(res);
        })



    }



    checkDataBoard(){
        //CHECK IF ECOFY DATA BOARD EXIST
        monday.api(`query { boards(limit:100) { id, name } }`).then(res => {
            console.log(res);

            for (let board of res.data.boards) {
                if (board.name === "Ecofy Data Board") {
                    this.setState({databoardid: board.id});
                }
                console.log(board.name);
            }


            if (this.state.databoardid === 0) {


                console.log('suuu');


                // this.createBoard();



            } else {


            }


        });

    }

    createBoard() {
        console.log('suuu2');

        //CONFIRM NEW SETUP
        monday.execute("confirm", {
            message: "Want to create entries board?",
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
  board_owner_ids:[${this.state.userid}],
  board_kind:private
) { id } }`).then(res => {
                    console.log(res);

                    this.setState({databoardid: res.data.create_board.id});

                    //Create Columns
                    // createColumn1: create_column(board_id:${this.state.databoardid},column_type:people,title:Participant){ id }
                    monday.api(`mutation {
      createColumn1: create_column(board_id:${this.state.databoardid},column_type:date,title:Date){ id }
   createColumn2: create_column(board_id:${this.state.databoardid},column_type:status,title:Transportation){ id }
    createColumn3: create_column(board_id:${this.state.databoardid},column_type:status,title:Alimentation){ id }
      createColumn4: create_column(board_id:${this.state.databoardid},column_type:numbers,title:Points){ id }
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


    UpdateStep(step) {
        //Update step of new owner users for analytics of user experience and conversion
        // axios.get('https://www.profesionalify.com/monday/ecofy/?account='+this.state.userid+'&step='+step);
    }


    WhatIsEcofy() {
        //Send to presentation section
        this.setState({part: 2});
    }

    SetupEcofy() {
        //Send to setup section
        this.setState({part: 3});

    }



    SendSetup(){

        this.setState({datasend: true});

        let parameters = [];
        parameters.push({

            accountid  :  this.state.accountid,
            name  :  this.state.accountname,
            level  : 0,
            option1  :  this.state.guests_allowed,
            option2  :  this.state.frequency,
            option3  :  this.state.prize_visible,
            option4  :  0,
            reward  :  this.state.reward,
            score  : 0,
        });
    // ,{headers:{"Content-Type" : "application/json"}}
        axios.post('/api/monday/ecofy/createsetup', {

            parameters: parameters


        }).then(res => {

            if(res.data.result==='ok'){
                this.setState({exist:true});
                this.setState({part:4});
            }else{
                console.log(res);
                alert('Problem at creating setup, please close and retry');
            }


        });

    }



    NextStep(step){


        let steps2 = this.state.steps;
        console.log(steps2);
        steps2[step-1].status=MultiStepIndicator.stepStatuses.FULFILLED;
        steps2[step].status=MultiStepIndicator.stepStatuses.ACTIVE;
        this.setState({steps: steps2});
        this.setState({step: step+1});
    }

    UpdateStep(step) {
        //Send Setup Configuration to Ecofy Server to finalize setup
        // axios.get('https://www.profesionalify.com/monday/ecofy/?account='+this.state.userid+'&step='+step);
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

            <div>

                {this.state.loading &&
                    <Loader size={40}/>
                }

                {this.state.loading === false &&
                    <div>


                        {/*IF ADMIN*/}
                        {this.state.admin === true &&
                            <div className="scale-up">

                                {/*NEW SETUP*/}
                                {this.state.exist === false &&
                                    <div>
                                        {/*WELCOME TO ECOFY*/}
                                        <Transition in={this.state.part === 1} timeout={300}>
                                            {state => (


                                                <div style={{
                                                    ...defaultStyle,
                                                    ...transitionStyles[state]
                                                }}>
                                                    <h1 className="greenify-h2">Welcome to Ecofy</h1>


                                                    <div

                                                        style={{

                                                            justifyContent: "space-evenly",
                                                            alignItems: "center",
                                                            width: "100%",
                                                            textAlign:"center",
                                                        }}>

<div>
                                                                <IconButton onClick={() => this.SetupEcofy()}
                                                                            kind={IconButton.kinds.PRIMARY}
                                                                            ariaLabel="My primary IconButton"
                                                                            size={IconButton.sizes.LARGE}
                                                                            color={IconButton.colors.POSITIVE}
                                                                            className={'mt-4'} style={{  width: '154.125px'}}>

                                                                    Create Setup
                                                                </IconButton>
                                                    </div>

                                                        <div>
                                                                <IconButton onClick={() => this.WhatIsEcofy()}
                                                                            kind={IconButton.kinds.SECONDARY}
                                                                            ariaLabel="My primary IconButton"
                                                                            size={IconButton.sizes.LARGE}
                                                                            color={IconButton.colors.POSITIVE}
                                                                            className={'mt-4'}>

                                                                   What is Ecofy?
                                                                </IconButton>
                                                    </div>


                                                    </div>

                                                </div>

                                            )}

                                        </Transition>


                                        {/*WHAT IS ECOFY*/}
                                        <Transition in={this.state.part === 2} timeout={300}>
                                            {state => (


                                                <div style={{
                                                    ...defaultStyle,
                                                    ...transitionStyles[state]
                                                }}>
                                                    <h3 className="greenify-h2 h3-what-is-ecofy">Ecofy create a simple daily routine so
                                                        your team can be aware of their climate impact</h3>


                                                    <div className={'image-presentation-container'}>
                                                        <img src={'/images/image-presentation-1.png'}
                                                             className={'image-presentation-1'}/>
                                                        <img src={'/images/image-presentation-2.png'}
                                                             className={'image-presentation-2'}/>
                                                    </div>


                                                    <div
                                                        style={{
                                                            display: "flex",
                                                            justifyContent: "space-evenly",
                                                            alignItems: "center",
                                                            width: "100%"
                                                        }}>

                                                        <Tooltip content="Setup new board for participants">
                                                            <div className="monday-storybook-tooltip_icon-wrapper">
                                                                <IconButton onClick={() =>  this.setState({part: 3})}
                                                                            kind={IconButton.kinds.PRIMARY}
                                                                            ariaLabel="My primary IconButton"
                                                                            size={IconButton.sizes.LARGE}
                                                                            color={IconButton.colors.POSITIVE}
                                                                            className={''}>
                                                                    Create Setup
                                                                </IconButton>
                                                            </div>
                                                        </Tooltip>


                                                    </div>

                                                </div>

                                            )}

                                        </Transition>


                                        {/*SETUP ECOFY*/}
                                        <Transition in={this.state.part === 3} timeout={300}>

                                            {state => (


                                                <div style={{
                                                    ...defaultStyle,
                                                    ...transitionStyles[state]
                                                }}>
<div className="scale-up" style={{height: '450px'}}>


                                                    {/*STEPS INDICATOR*/}
                                                    <MultiStepIndicator steps={this.state.steps}
                                                                        type={MultiStepIndicator.types.SUCCESS}/>


                                                    {/*STEP 1: PARTICIPANTS*/}
                                                    <Transition in={this.state.step === 1} timeout={50} >


                                                        {state => (


                                                            <div style={{
                                                                ...defaultStyle,
                                                                ...transitionStyles[state]
                                                            }}>


                                                                <h2 className="greenify-h2 pt-4">Participants Configuration</h2>

                                                                <div
                                                                    style={{
                                                                        height: '10px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>


                                                                <Tooltip content="Can Guest users participate in the Ecofy Participants Widget and Influence the Team score">
                                                                    <div
                                                                        className="monday-storybook-tooltip_icon-wrapper">
                                                                        <p className="greenify-h2">Allow guest users to participate:</p>
                                                                    </div>
                                                                </Tooltip>

                                                                {/*OPTION 1*/}
                                                                <div  className="pb-4 mb-4">
                                                                    <RadioButton name="radio-buttons-group-1"
                                                                                 className="options-radio"
                                                                                 text="Yes"
                                                                                 onClick={() => this.setState({guests_allowed: 1})}
                                                                    />
                                                                    <RadioButton name="radio-buttons-group-1"
                                                                                 className="options-radio"
                                                                                 text="No"
                                                                                 onClick={() =>this.setState({guests_allowed: 0})}
                                                                    />
                                                                </div>

                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>


                                                                <div

                                                                    style={{
                                                                        display: "flex",
                                                                        justifyContent: "space-evenly",
                                                                        alignItems: "center",
                                                                        width: "100%"
                                                                    }}>
                                                                            <IconButton
                                                                                onClick={() => this.NextStep(1)}
                                                                                kind={IconButton.kinds.PRIMARY}
                                                                                ariaLabel="My primary IconButton"
                                                                                size={IconButton.sizes.LARGE}
                                                                                color={IconButton.colors.POSITIVE}
                                                                                className={'greenify-btn '}>

                                                                                Next
                                                                            </IconButton>
                                                            </div>


                                                            </div>
                                                        )}
                                                    </Transition>


                                                    {/*STEP 2: PRIZE*/}
                                                    <Transition in={this.state.step === 2} timeout={300}>


                                                        {state => (


                                                            <div style={{
                                                                ...defaultStyle,
                                                                ...transitionStyles[state]
                                                            }}>


                                                                <h2 className="greenify-h2 pt-4">Prize Configuration</h2>

                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>
                                                                {/*<h3 className="greenify-h2 pb-4">Reward</h3>*/}


                                                                <Tooltip content="It can be materialistic like a coffee or more subtle like choosing company trip destination or activity">
                                                                    <div
                                                                        className="monday-storybook-tooltip_icon-wrapper">
                                                                        <p className="greenify-h2">Reward to the best participant: </p>
                                                                    </div>
                                                                </Tooltip>

                                                                <div className="pb-2 mb-4">
                                                                <input className="input-ecofy"  value={this.state.reward}   placeholder="Reward/Prize" onChange={(e) => this.setState({reward: e.target.value})} />
                                                                    <div
                                                                        className="input-component__sub-text-container">
                                                                        <span style={{opacity:'0.6',fontSize:'14px'}}
                                                                            className="input-component__sub-text-container-status"
                                                                            aria-label="Additional helper text">examples: free coffee / right to choose company trip / giftcard</span>
                                                                    </div>
                                                            </div>
                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>



                                                                <Tooltip content="Make the reward mysterious, it can increase the engagement for participants the first time around">
                                                                    <div
                                                                        className="monday-storybook-tooltip_icon-wrapper">
                                                                        <p className="greenify-h2">Hide Prize to participants: </p>
                                                                    </div>
                                                                </Tooltip>


                                                                {/*OPTION 3*/}
                                                                <div className='pb-4 mb-4'>
                                                                    <RadioButton name="radio-buttons-group-3"
                                                                                 className="options-radio"
                                                                                 text="Visible (recommended)"
                                                                                 onClick={()=>this.setState({prize_visible :1})}
                                                                    />
                                                                    <RadioButton name="radio-buttons-group-3"
                                                                                 className="options-radio"
                                                                                 text="Hidden "
                                                                                 onClick={()=>this.setState({prize_visible :0})}
                                                                    />

                                                                </div>


                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>


                                                                <div

                                                                    style={{
                                                                        display: "flex",
                                                                        justifyContent: "space-evenly",
                                                                        alignItems: "center",
                                                                        width: "100%"
                                                                    }}>
                                                                            <IconButton
                                                                                onClick={() => this.NextStep(2)}
                                                                                kind={IconButton.kinds.PRIMARY}
                                                                                ariaLabel="My primary IconButton"
                                                                                size={IconButton.sizes.LARGE}
                                                                                color={IconButton.colors.POSITIVE}
                                                                                className={''}>

                                                                                Next
                                                                            </IconButton>
                                                                </div>



                                                            </div>
                                                        )}
                                                    </Transition>


                                                    {/*STEP 3: GENERAL*/}
                                                    <Transition in={this.state.step === 3} timeout={300}>


                                                        {state => (


                                                            <div style={{
                                                                ...defaultStyle,
                                                                ...transitionStyles[state]
                                                            }}>


                                                                <h2 className="greenify-h2 pt-4">General Configuration</h2>

                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>
                                                                {/*<h3 className="greenify-h2 pb-4">Reward</h3>*/}


                                                                <Tooltip content="Send a notifications to all allowed users to install the participant ecofy widget so they can participate">
                                                                    <div
                                                                        className="monday-storybook-tooltip_icon-wrapper">
                                                                        <p className="greenify-h2">Notify users to add the participant widget: </p>
                                                                    </div>
                                                                </Tooltip>

                                                                <IconButton
                                                                    onClick={() => this.NotifyAllUsers()}
                                                                    kind={IconButton.kinds.PRIMARY}
                                                                    ariaLabel="My primary IconButton"
                                                                    size={IconButton.sizes.LARGE}

                                                                    className={'mb-4'}>
                                                                    Notify
                                                                </IconButton>

                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>


                                                                <Tooltip content="It can be materialistic like a coffee or more subtle like choosing company trip destination or activity">
                                                                    <div
                                                                        className="monday-storybook-tooltip_icon-wrapper">
                                                                        <p className="greenify-h2">Frequency of results: </p>
                                                                    </div>
                                                                </Tooltip>


                                                                {/*OPTION 2*/}
                                                                <div className="pb-4 mb-4">
                                                                    <RadioButton name="radio-buttons-group-2"
                                                                                 className="options-radio"
                                                                                 text="Weekly (recomended)"
                                                                                 onClick={()=>this.setState({frequency :1})}
                                                                    />
                                                                    <RadioButton name="radio-buttons-group-2"
                                                                                 className="options-radio"
                                                                                 text="Monthly "
                                                                                 onClick={()=>this.setState({frequency :2})}
                                                                    />
                                                                </div>


                                                                <div
                                                                    style={{
                                                                        height: '20px',
                                                                        width: '400px'
                                                                    }}
                                                                >
                                                                    <Divider />
                                                                </div>

                                                                <div

                                                                    style={{
                                                                        display: "flex",
                                                                        justifyContent: "space-evenly",
                                                                        alignItems: "center",
                                                                        width: "100%"
                                                                    }}>


                                                                            <IconButton
                                                                                onClick={() => this.SendSetup()}
                                                                                kind={IconButton.kinds.PRIMARY}
                                                                                ariaLabel="My primary IconButton"
                                                                                size={IconButton.sizes.LARGE}
                                                                                color={IconButton.colors.POSITIVE}
                                                                                className={''}>

                                                                                Continue
                                                                            </IconButton>



                                                                </div>


                                                            </div>
                                                        )}
                                                    </Transition>

</div>
                                                </div>
                                            )}
                                        </Transition>

                                    {/*    END STEPS SETUP SECTION*/}

                                    </div>
                                }





































                                {/*ECOFY SETUP EXISTS */}
                                {this.state.exist === true &&
                                    <div>


                                        {this.state.part !== 4 &&
                                            <div>

                                        <TabsContext className="monday-storybook-tabs_wrapper">
                                            <TabList style={{paddingLeft: '0px'}}>
                                                <Tab>Scores</Tab>
                                                <Tab>Prize</Tab>
                                                <Tab>Options</Tab>
                                            </TabList>
                                            <TabPanels>


                                                {/*SCORES*/}
                                                <TabPanel>



                                                    <div className="grid-doble grid-40-60 ">

                                                        {/* POSITIONS */}
                                                        <div className="pr-4">
                                                            <h3 className="pb-4">Weekly Progress</h3>
                                                            <Doughnut data={data} />

                                                        </div>


                                                        {/* POSITIONS */}
                                                        <div>
                                                            {/*<h3>Weekly Progress</h3>*/}
                                                            <div style={{display: "grid", gridTemplateRows: "auto auto " ,   padding: "67px 0px 0px 42px"}}>


                                                                {/*PROGRESS TRANSPORT*/}
                                                                <div style={{display: "block"}}>
                                                                    <div className={"info-progress"}>
                                                                        <div>

                                                                            <Tooltip content="Transport Score">

                                                                                <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 640 512" >
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="grey"
                                                                                      d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z"/>

                                                                            </svg>
                                                                                </Tooltip>
                                                                        </div>


                                                                        <Tooltip content="Weekly difference computed with an average commute to work of 25km / 15 miles">
                                                                        <div className="info-progress-data-1">{this.state.transportscore >= 0 && <span>+</span>} {this.state.transportscore} kg CO2  </div>
                                                                        </Tooltip>

                                                                        {this.state.progressTransport >= 0 && <div className={"info-progress-data"}>
                                                                            +{this.state.progressTransport}%
                                                                        </div>}
                                                                        {this.state.progressTransport < 0 &&
                                                                            <div className={"info-progress-data negative"}>
                                                                                {this.state.progressTransport}%
                                                                            </div>}
                                                                    </div>


                                                                    <Tooltip content="">
                                                                        <div className="monday-storybook-tooltip_icon-wrapper">

                                                                            <div className="linear-progress-bar_block">
                                                                                <LinearProgressBar className="linear-progress-bar_small-wrapper"
                                                                                                   size={LinearProgressBar.sizes.LARGE} multi
                                                                                                   multiValues={this.state.multiValuesTransport}/>

                                                                            </div>
                                                                        </div>
                                                                    </Tooltip>



                                                                </div>

                                                                {/*PROGRESS ALIMENTATION*/}
                                                                <div style={{display: "block"}}>
                                                                    <div className={"info-progress"}>
                                                                        <div>
                                                                            <Tooltip content="Dietary Score">


                                                                                <svg width="22" height="26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 512 512">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="grey"
                                                                                      d="M495.8 288H16.19C7.055 288-.6992 295.8 .0508 304.9c6.758 76.38 58.28 139.4 128.1 163.9V480c0 17.62 14.45 32 32.09 32h192.2c17.65 0 32.04-14.38 32.04-32v-11.5c69.46-24.62 120.8-87.5 127.4-163.6C512.7 295.8 505.1 288 495.8 288zM320 224c0 11.28 2.305 21.95 5.879 32h180.2C509.7 245.9 512 235.3 512 224c0-53.02-42.98-96-96-96S320 170.1 320 224zM96.09 256h73.29L84.69 171.3c-6.25-6.25-6.25-16.38 0-22.62s16.38-6.25 22.62 0L208 249.4V112C208 103.2 215.2 96 224 96s16 7.156 16 16V256h52.66c-2.875-10.38-4.375-21.12-4.5-32c.125-70.63 57.39-127.9 128-128c2.625 0 5.127 .625 7.752 .75C406.3 76.88 380.9 64 352.2 64c-8.504 .125-17.1 1.411-25.23 3.786C309.3 26.66 268.9 0 224.1 0C179.4 0 138.9 26.62 121.2 67.75C113.1 65.38 104.6 64.13 96.09 64C43.07 64 .0508 107 .0508 160S43.07 256 96.09 256z"/>
                                                                            </svg>
                                                                                </Tooltip>
                                                                        </div>

                                                                        <Tooltip content="Weekly difference computed with an average serving of 300 gr / 10 oz ">
                                                                        <div className="info-progress-data-1">{this.state.alimentationscore >= 0 && <span>+</span>}{this.state.alimentationscore < 0 && <span>-</span>} {this.state.alimentationscore}kg CO2</div>
                                                                        </Tooltip>



                                                                        {this.state.progressAlimentation >= 0 && <div className={"info-progress-data"}>
                                                                            +{this.state.progressAlimentation}%
                                                                        </div>}
                                                                        {this.state.progressAlimentation < 0 &&
                                                                            <div className={"info-progress-data negative"}>
                                                                                {this.state.progressAlimentation}%
                                                                            </div>}
                                                                    </div>
                                                                    <Tooltip content="">
                                                                        <div className="monday-storybook-tooltip_icon-wrapper">

                                                                            <div className="linear-progress-bar_block">
                                                                                <LinearProgressBar className="linear-progress-bar_small-wrapper"
                                                                                                   size={LinearProgressBar.sizes.LARGE} multi
                                                                                                   multiValues={this.state.multiValuesAlimentation}/>

                                                                            </div>
                                                                        </div>
                                                                    </Tooltip>
                                                                </div>

                                                                {/*PROGRESS PARTICIPATION*/}
                                                                <div style={{display: "block"}}>
                                                                    <div className={"info-progress"}>
                                                                        <div>
                                                                            <Tooltip content="Participation Rate">
                                                                                <div className="monday-storybook-tooltip_icon-wrapper">

                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                                                 viewBox="0 0 640 512">
                                                                                <path fill="grey"
                                                                                      d="M184 88C184 118.9 158.9 144 128 144C97.07 144 72 118.9 72 88C72 57.07 97.07 32 128 32C158.9 32 184 57.07 184 88zM208.4 196.3C178.7 222.7 160 261.2 160 304C160 338.3 171.1 369.8 192 394.5V416C192 433.7 177.7 448 160 448H96C78.33 448 64 433.7 64 416V389.2C26.16 371.2 0 332.7 0 288C0 226.1 50.14 176 112 176H144C167.1 176 190.2 183.5 208.4 196.3V196.3zM64 245.7C54.04 256.9 48 271.8 48 288C48 304.2 54.04 319.1 64 330.3V245.7zM448 416V394.5C468 369.8 480 338.3 480 304C480 261.2 461.3 222.7 431.6 196.3C449.8 183.5 472 176 496 176H528C589.9 176 640 226.1 640 288C640 332.7 613.8 371.2 576 389.2V416C576 433.7 561.7 448 544 448H480C462.3 448 448 433.7 448 416zM576 330.3C585.1 319.1 592 304.2 592 288C592 271.8 585.1 256.9 576 245.7V330.3zM568 88C568 118.9 542.9 144 512 144C481.1 144 456 118.9 456 88C456 57.07 481.1 32 512 32C542.9 32 568 57.07 568 88zM256 96C256 60.65 284.7 32 320 32C355.3 32 384 60.65 384 96C384 131.3 355.3 160 320 160C284.7 160 256 131.3 256 96zM448 304C448 348.7 421.8 387.2 384 405.2V448C384 465.7 369.7 480 352 480H288C270.3 480 256 465.7 256 448V405.2C218.2 387.2 192 348.7 192 304C192 242.1 242.1 192 304 192H336C397.9 192 448 242.1 448 304zM256 346.3V261.7C246 272.9 240 287.8 240 304C240 320.2 246 335.1 256 346.3zM384 261.7V346.3C393.1 335 400 320.2 400 304C400 287.8 393.1 272.9 384 261.7z"/>
                                                                            </svg>
                                                                                </div></Tooltip>
                                                                        </div>


                                                                        <Tooltip content="How many more entries this week">
                                                                        <div className="info-progress-data-1">{this.state.progressParticipation >= 0 && <span>+</span>} {this.state.progressParticipation}  </div>
                                                                        </Tooltip>


                                                                        {this.state.progressParticipation >= 0 && <div className={"info-progress-data"}>
                                                                            +{this.state.progressParticipation}%
                                                                        </div>}
                                                                        {this.state.progressParticipation < 0 &&
                                                                            <div className={"info-progress-data negative"}>
                                                                                {this.state.progressParticipation}%
                                                                            </div>}
                                                                    </div>


                                                                    <Tooltip content={this.state.participationscore}>
                                                                        <div className="monday-storybook-tooltip_icon-wrapper">

                                                                            <div className="linear-progress-bar_block">
                                                                                <LinearProgressBar className="linear-progress-bar_small-wrapper"
                                                                                                   size={LinearProgressBar.sizes.LARGE} multi
                                                                                                   multiValues={this.state.multiValuesParticipation}/>

                                                                            </div>
                                                                        </div>
                                                                    </Tooltip>



                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>


                                                </TabPanel>


                                                {/*PRIZE*/}
                                                <TabPanel>



                                                    <div className="grid-doble">
                                                        <div>

                                                            <div>
                                                                <div style={{
                                                                    display: "flex",
                                                                    width: "100%",
                                                                    gridTemplateColumns: "auto 75px",
                                                                }}>
                                                                <h3>Last Winner</h3>
                                                                    {/*<IconButton*/}
                                                                    {/*    onClick={() => this.RevealWinner()}*/}
                                                                    {/*    kind={IconButton.kinds.PRIMARY}*/}
                                                                    {/*    ariaLabel="My primary IconButton"*/}
                                                                    {/*    size={IconButton.sizes.LARGE}*/}
                                                                    {/*    color={IconButton.colors.POSITIVE}*/}
                                                                    {/*    className={''}>*/}

                                                                    {/*    Reveal*/}
                                                                    {/*</IconButton>*/}
                                                                </div>

                                                                <div className="greenify-prize" style={{marginTop:'0px'}}>
                                                                    <div>

                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none"
                                                                             viewBox="0 0 576 512">
                                                                            <path fill="#ffcb00"
                                                                                  d="M447.1 96L448 32c0-17.67-14.49-32-32.17-32H160.2C142.5 0 128 14.33 128 32l.0059 64c0 0 0 175.7 112.1 275c9.715 8.604 15.9 20.65 15.9 33.62C256 428.7 236.7 448 212.6 448H208c-26.51 0-47.99 21.49-47.99 48c0 8.836 7.162 16 15.1 16H399.1c8.836 0 15.1-7.164 15.1-16c0-26.51-21.48-48-47.99-48h-4.644c-24.03 0-43.36-19.33-43.36-43.35c0-12.98 6.184-25.02 15.9-33.62C447.1 271.7 447.1 96 447.1 96zM288.1 214.7L243.3 238.3c-4.689 2.465-10.17-1.516-9.271-6.742l8.578-49.98L206.3 146.3C202.5 142.6 204.6 136.2 209.8 135.4l50.26-7.344l22.43-45.43c2.346-4.75 9.119-4.75 11.46 0l22.43 45.43l50.08 7.316c5.244 .7656 7.33 7.219 3.529 10.91l-36.34 35.3l8.58 49.98c.8945 5.227-4.584 9.207-9.273 6.742L288.1 214.7z"/>
                                                                            <path fill="#FFCB006E"
                                                                                  d="M193.7 316.9C189.8 311.1 186.2 305.3 182.8 299.4c-47.14-19.35-82.56-45.83-105.4-79.52C49.47 178.6 47.01 135.7 48.38 112h80.39C128.1 101.9 128 96 128 96l.0836-32H27.26C16.16 64 6.537 71.59 3.912 82.38C3.1 85.78-15.71 167.2 37.07 245.9c37.45 55.82 100.6 95.03 187.5 117.4c8.828 2.268 17.76 9.74 15.51 7.75C211.9 346 194.2 317.4 193.7 316.9zM572.1 82.38C569.5 71.59 559.8 64 548.7 64h-100.8l.0812 32c0 0-.0955 5.926-.7654 16h80.39c1.375 23.66-1.093 66.63-29.03 107.8c-22.82 33.69-58.25 60.17-105.4 79.52c-3.402 5.91-7.023 11.73-10.86 17.5c-.5352 .5352-18.2 29.14-46.45 54.16c-2.248 1.99 6.686-5.482 15.51-7.75c86.96-22.34 150.1-61.55 187.5-117.4C591.7 167.2 572.9 85.78 572.1 82.38zM342.2 231.6l-8.58-49.98l36.34-35.3c3.801-3.691 1.715-10.14-3.529-10.91l-50.08-7.316l-22.43-45.43c-2.344-4.75-9.117-4.75-11.46 0l-22.43 45.43L209.8 135.4C204.6 136.2 202.5 142.6 206.3 146.3l36.31 35.27L234 231.6c-.8965 5.227 4.582 9.207 9.271 6.742l44.85-23.57l44.85 23.57C337.7 240.8 343.1 236.8 342.2 231.6z"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div className={"greenify-prize-text"}>{this.state.reward}</div>
                                                                </div>

                                                            </div>



                                                            <div>


                                                                <h3>Reward</h3>
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
                                                                    <input value={this.state.reward} className={"greenify-prize-text"} onChange={(e) => this.setState({reward: e.target.value})}></input>

                                                                </div>
                                                                <IconButton onClick={() => this.SetupEcofy()}
                                                                            kind={IconButton.kinds.PRIMARY}
                                                                            ariaLabel="My primary IconButton"
                                                                            size={IconButton.sizes.LARGE}
                                                                            color={IconButton.colors.POSITIVE}
                                                                            className={'mt-4'} >

                                                                    Save
                                                                </IconButton>

                                                            </div>


                                                        </div>


                                                        <div>

                                                        </div>

                                                    </div>



                                                </TabPanel>


                                                {/*OPTIONS*/}
                                                <TabPanel>
                                                    <h2>Account Details</h2>
                                                    <TextField title="Account Name" size={TextField.sizes.MEDIUM}
                                                               placeholder="Account Name"/>

                                                    {/*CREATE MONDAY BOARD*/}
                                                    {this.state.databoardid === 0 &&
                                                        <div>
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
                                                                             viewBox="0 0 640 512"
                                                                             style={{margin: "0px -5px"}}>
                                                                            <path fill-rule="evenodd"
                                                                                  clip-rule="evenodd"
                                                                                  fill="currentColor"
                                                                                  d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z"/>

                                                                        </svg>
                                                                        Continue
                                                                    </IconButton>
                                                                </div>
                                                            </Tooltip>
                                                        </div>
                                                    }
                                                    {this.state.databoardid !== 0 &&
                                                        <div>
                                                            <Tooltip content="Board already created">
                                                                <div className="monday-storybook-tooltip_icon-wrapper">
                                                                    <IconButton onClick={() => console.log('su')}
                                                                                kind={IconButton.kinds.PRIMARY}
                                                                                ariaLabel="My primary IconButton"
                                                                                size={IconButton.sizes.LARGE}
                                                                                color={IconButton.colors.POSITIVE}
                                                                                className={'greenify-btn'}>
                                                                        <svg width="49" height="49" fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 640 512"
                                                                             style={{margin: "0px -5px"}}>
                                                                            <path fill-rule="evenodd"
                                                                                  clip-rule="evenodd"
                                                                                  fill="currentColor"
                                                                                  d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z"/>

                                                                        </svg>
                                                                        Created
                                                                    </IconButton>
                                                                </div>
                                                            </Tooltip>
                                                        </div>
                                                    }
                                                </TabPanel>
                                            </TabPanels>
                                        </TabsContext>
                                            </div>
                                        }


                                        {this.state.part === 4 &&
                                            <div>

                                                <h1 className="greenify-h2">¡Ready to Start!</h1>

                                                <p>But before accessing the stats panel go do the first entries <br/>
                                                    as a participant with the participant widget.</p>

                                            </div>
                                        }




                                    </div>
                                }



























                            </div>
                        }

                        {/*NO ADMIN*/}
                        {this.state.admin === false &&
                            <div>
                                <h2 className="greenify-h2">You need to be an admin for this widget</h2>

                                <Tooltip content="Board already created">
                                    <div className="monday-storybook-tooltip_icon-wrapper text-center">
                                        <IconButton onClick={() => console.log('su')}
                                                    kind={IconButton.kinds.PRIMARY}
                                                    ariaLabel="My primary IconButton"
                                                    size={IconButton.sizes.LARGE}
                                                    color={IconButton.colors.POSITIVE}
                                                    className={''}>
                                            What is Ecofy?
                                        </IconButton>
                                    </div>
                                </Tooltip>
                            </div>

                        }





                    </div>
                }
            </div>
        </div>;
    }
}

export default App;
