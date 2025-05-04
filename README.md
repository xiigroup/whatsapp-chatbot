# Whatsapp Chatbot
A simple whatsapp chatbot for answering simple queries, serves as a basic example for building chatbots, uses our unified messaging gateway.


## Prequisitions
1. PHP Hosting (Shared or VPS) & Domain, Get here [https://cp.xiigroup.co.za/s/webdev/](https://cp.xiigroup.co.za/s/webdev/).
2. Unified Messaging Subscription, Get here [https://cp.xiigroup.co.za/s/webdev/](https://cp.xiigroup.co.za/s/webdev/)
3. Basic PHP OOP Knowledge, Hire a developer here [https://xiigroup.co.za](https://xiigroup.co.za/#development) (Free 20 Minutes Consulting).
4. Latest Unified messaging - PHP Version, Get on Github [https://github.com/xiigroup/Unified-Messaging](https://github.com/xiigroup/Unified-Messaging)

## Setup Instructions



## Chatbot logic
**chatbot.php** file is the main chat bot file, withing it the chatbot rely on 4 things in its structure, **Memory**, **Processor**, **State controller**, **Functions** and **States**.

1. *Memory (Experimental)*
   This help the bot to remember data by storing it in memory of 100kb, the memory can be fully managed by the bot using Read / Right.

2. *Processor*
   This is the entry point of the chatbot and is were all messages and states, default state is **START** which needs to point to a function in our case **START** maps to **start_bot** function
  

3. *State controller*
   This is where we register and map our states to functions, E.g.

    ```
    $state_controller = [
        "START" => "start_bot", //START is Required
    	  "AUTH" => "authenticate",
    	  "MAIN" => "main_menu",
    ];
    ````

4. *Functions*
   This is were all the magic happens funtions are programmed by you to give the bot more functions, functions need to be registered with the State Controller, function will be triggered by the processor on income **$message**.
   withing the function you will write code to process incoming $message also manage memory, state and also reply to incoming $message, You will set state to tell the bot which state to go in on next incoming message and save data in memory which you might
   need in the future.

   private function start_bot(*$message*){ //$message is required,
       //here you might want to check wether or not the number is authenticated, for now lets say user is authenicated
       $authenticated = true;
       //if Authenticated allow to access main_menu function by setting state to MAIN
       if($authenticated){
         $his->message = "Hello there, welcome to main menu\n\n";
         $his->message = "1. \n\n";
         $this->state = "MAIN";
       }else{
         $his->message = "Hello there, You are not logged in\n\n";
         $his->message = "1. Log in \n\n";
         $this->state = "AUTH";
       }
   }

6. *State*
   This is to tell the bot which funtion to trigger, used to map to function.
