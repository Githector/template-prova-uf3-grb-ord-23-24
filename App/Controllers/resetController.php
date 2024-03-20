<?php 

    include_once(__DIR__ . "/../Models/Ticket.php");
    include_once(__DIR__ . "/../Models/Device.php");
    include_once(__DIR__ . "/../Models/User.php");
    include_once(__DIR__ . "/../Models/State.php");

    class resetController extends Controller{
            
            public function run(){
                
                session_destroy();
                $db = new Database();
                $sql = 'DROP TABLE IF EXISTS users, tickets, devices, states';
                
                $db->queryDataBase($sql);

                State::createTable();
              
                Device::createTable();
                
                User::createTable();

                Ticket::createTable();


                $stateModel = new State();
                $state = [
                    'state_name' => 'Received',
                ];

                $stateModel->insert($state);

                $state = [
                    'state_name' => 'In process',
                ];


                $stateModel->insert($state);

                $state = [
                    'state_name' => 'Escalated',
                ];

                $stateModel->insert($state);


                $state = [
                    'state_name' => 'Solved',
                ];

                $stateModel->insert($state);
                

                $deviceModel = new Device();
                $device = [
                    'type' => 'PC',
                    'reference' => 'PC-001',
                ];

                $deviceModel->insert($device);

                $device = [
                    'type' => 'PC',
                    'reference' => 'PC-002',
                ];

                $deviceModel->insert($device);

                $device = [
                    'type' => 'Printer',
                    'reference' => 'PR-001',
                ];

                $deviceModel->insert($device);

                $device = [
                    'type' => 'Screen',
                    'reference' => 'SC-001',
                ];

                $deviceModel->insert($device);

                $device = [
                    'type' => 'Mouse',
                    'reference' => 'MS-001',
                ];


                $deviceModel->insert($device);

                $device = [
                    'type' => 'Keyboard',
                    'reference' => 'KB-001',
                ];

                $deviceModel->insert($device);

                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'john',
                    'level' => '2',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];
                $userModel->insert($user);

                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'maria',
                    'level' => '2',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);


                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'leo',
                    'level' => '1',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];
                $userModel->insert($user);


                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'pepe',
                    'level' => '2',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);

                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'michel',
                    'level' => '1',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);

                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'carla',
                    'level' => '1',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);

                $ticketModel = new Ticket();

                $ticket = [
                    'id_user' => '1',
                    'id_device' => '1',
                    'problem_description' => 'The PC is not working',
                    'id_state' => '2',
                ];

                $ticketModel->insert($ticket);

                $ticketModel = new Ticket();

                $ticket = [
                    'id_device' => '2',
                    'problem_description' => 'PC is always rebooting',
                ];

                $ticketModel->insert($ticket);

                $ticketModel = new Ticket();

                $ticket = [
                    'id_device' => '3',
                    'problem_description' => 'The printer is not working',
                ];

                $ticketModel->insert($ticket);

                $ticketModel = new Ticket();

                $ticket = [
                    'id_user' => '1',
                    'id_device' => '4',
                    'problem_description' => 'The screen is broken',
                    'id_state' => '2'
                ];

                $ticketModel->insert($ticket);

                $ticketModel = new Ticket();

                $ticket = [
                    'id_user' => '2',
                    'id_device' => '5',
                    'problem_description' => 'The mouse is not working',
                    'id_state' => '4'
                ];

                $ticketModel->insert($ticket);

                $ticketModel = new Ticket();

                $ticket = [
                    'id_device' => '6',
                    'problem_description' => 'Keyboard is not working',
                    'id_state' => '3',
                    'level' => '2',
                ];

                $ticketModel->insert($ticket);



                header("Location: /main/index");
            }

    }

?>