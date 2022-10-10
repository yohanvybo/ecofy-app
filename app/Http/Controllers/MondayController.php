<?php

namespace App\Http\Controllers;


use App\Models\Scores;
use App\Models\Subscriptions;
use App\Models\Surveys;
use App\Models\User;
use Illuminate\Http\Request;

class MondayController extends Controller
{







    public function getadmin(Request $request){

        $accountid=$request['accountid'];
        $subscription= Subscriptions::where('accountid', $accountid)->first();

        $result='notok';
        $scores=[];
        $winner='';
        $participants=[];
        if($subscription!==null){

            $scores= Scores::where('accountid', $accountid)->get();

            $participants= User::where('accountid', $accountid)->get();

//            usort($participants,
//                function($a,$b)
//                {
//                    return strnatcmp($b['data_1'],$a['data_1']);
//                }
//            );

            $winner=$participants[0];

            $result='ok';
        }


        $response = [
            'winner'=>$winner,
            'participants'=>$participants,
            'result'=>$result,
            'subscription' => $subscription,
            'scores' => $scores,
        ];

        return response()->json($response);

    }


//  $fechacalculada = date("m-d-y", mktime(0, 0, 0, date("m"), date("d") + 7, date("Y")));






    public function getparticipant(Request $request){


        $today=date("m-d");


        $accountid=$request['accountid'];
        $userid=$request['userid'];


//        $scores= Scores::where('accountid', $accountid)->get();

        $subscription= Subscriptions::where('accountid', $accountid)->first();
        $user= User::where('accountid', $accountid)->where('userid', $userid)->first();

        $result='notok';
        $scores=[];


        if($subscription!==null){
            if($user!==null){

                if($user->lastday===$today){

                    $scores= Scores::where('accountid', $accountid)->get();
                    $result='done';
                }else{
                    $result='ok';
                }
            }else{

                $newuser= User::create([
                    'accountid' => $accountid,
                    'userid' => $userid,
                    'lastday'=>0,
                    'team'=>0,
                    'score'=>0,
                ]);

                $subscription->participants=$subscription->participants + 1 ;
                $subscription->save();
                $result='ok';
            }


        }


//            'subscription' => $subscription,
        $response = [
            'result' => $result,
            'subscription' => $subscription,
            'scores' => $scores,
        ];

        return response()->json($response);


    }



    public function savescore(Request $request){



        $today=date("m-d");

        $accountid=$request['accountid'];
        $userid=$request['userid'];



        $score= Scores::create([
            'accountid' => $accountid,
            'userid' => $userid,
            'day'=>$today,
            'time'=>time(),
            'team'=>0,
            'choice_1' => $request['choice_1'],
            'choice_2' => $request['choice_2'],
            'choice_3' => 4,
            'data_1' => 0,
        ]);

        $scores= Scores::where('accountid', $accountid)->get();
        $subscription= Subscriptions::where('accountid', $accountid)->first();

        $user= User::where('accountid', $accountid)->where('userid', $userid)->first();

if($user!==null){
if($request['choice_1']===1){
    $user->data_1=$user->data_1+3;
}
    if($request['choice_2']===1){
        $user->data_1=$user->data_1+3;
    }
    if($request['choice_1']===2){
        $user->data_1=$user->data_1+1;
    }
    if($request['choice_2']===2){
        $user->data_1=$user->data_1+1;
    }

    $user->lastday=$today;
    $user->save();
}else{
    $newuser= User::create([
        'accountid' => $accountid,
        'userid' => $userid,
        'lastday'=>$today,
        'team'=>0,
        'score'=>0,
        'name'=>$request['name'],
    ]);
}



        $response = [
            'result' => 'ok',
            'subscription'=>$subscription,
            'scores' => $scores,
        ];

        return response()->json($response);

    }



    public function changereward(Request $request){


        $accountid=$request['accountid'];
        $reward=$request['reward'];


        $subscription= Subscriptions::where('accountid', $accountid)->first();



        $subscription->reward =$reward;
        $subscription->save();

        $response = [
            'result' => 'ok',
            'subscription'=>$subscription,
        ];

        return response()->json($response);

    }

    public function changesetup(Request $request){


        $accountid=$request['accountid'];
        $option1=$request['option1'];


        $subscription= Subscriptions::where('accountid', $accountid)->first();



        $subscription->option1 =$option1;
        $subscription->save();

        $response = [
            'result' => 'ok',
            'subscription'=>$subscription,
        ];

        return response()->json($response);

    }

    public function prizevisibility(Request $request){


        $accountid=$request['accountid'];
        $option2=$request['option2'];


        $subscription= Subscriptions::where('accountid', $accountid)->first();



        $subscription->option2 =$option2;
        $subscription->save();

        $response = [
            'result' => 'ok',
            'subscription'=>$subscription,
        ];

        return response()->json($response);

    }











    public function changesetup2(Request $request){


        $request['data'] = json_decode($request['data']);


        $accountid = $request->accountid;

        $subscription= Subscriptions::where('accountid', $accountid)->first();



        $subscription->option1 =$request->option1;
        $subscription->option2 =$request->option2;
        $subscription->option3 =$request->option3;
$subscription->save();

    }

    public function createsetup(Request $request){

//        $request['data'] = json_decode($request['parameters']);


//        $parameters=json_decode($request['parameters']);

        $parameters=$request->parameters[0];


        $subscribtion= Subscriptions::create([
            'accountid' => $parameters['accountid'],
            'name' => $parameters['name'],
            'level' => 0,
            'participants' => 1,
            'option1' => $parameters['option1'],
            'option2' => $parameters['option2'],
            'option3' => $parameters['option3'],
            'option4' => 0,
            'reward' => $parameters['reward'],
            'score' => 0,
        ]);



        $newuser1= User::create([
            'accountid' => $parameters['accountid'],
            'userid' => $parameters['userid'],
            'lastday'=>0,
            'team'=>0,
            'score'=>0,
            'name'=>$parameters['username'],
        ]);


        $newuser2= User::create([
            'accountid' => $parameters['accountid'],
            'userid' => 0,
            'lastday'=>0,
            'team'=>0,
            'score'=>1,
            'name'=>'nobody'
        ]);


        $response = [
            'accountid'=>$parameters['accountid'],
'parameters'=>$parameters,
            'result' => 'ok',
        ];

        return response()->json($response);



    }






}
