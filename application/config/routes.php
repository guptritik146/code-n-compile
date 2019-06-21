<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//Home 
$route['default_controller'] = 'home';

//Tutorial
$route['tutorials-home'] = 'tutorial/tutorial/showTutorialsHome';  //folder-name/controller-name/function-name
$route['tutorials/(:any)'] = 'tutorial/tutorial/showTutorialsForTopic/$1';

//MCQ
$route['mcq-home'] = 'mcq/mcq/showMcqHome';
$route['mcq/(:any)'] = 'mcq/mcq/showMcqForTopic/$1';
$route['mcq/(:any)/(:any)'] = 'mcq/mcq/showMcqForSubTopic/$1/$2';



//Question Answers
$route['questions'] = 'question-answer/questionAnswer/showQuestionsHome';
$route['questions/(:any)'] = 'question-answer/questionAnswer/showQuestionsForTopic/$1';
$route['questions/(:any)/(:any)'] = 'question-answer/questionAnswer/showQuestionsForSubTopic/$1/$2';


//Online Quiz
$route['online-quiz-home'] = 'online-quiz/quiz/showQuizHome';
$route['online-quiz-for-topic/(:any)'] = 'online-quiz/quiz/showQuizForTopic/$1';
$route['online-quiz-instruction/(:any)'] = 'online-quiz/quiz/showQuizInstructionForQuizId/$1';
$route['online-quiz/(:any)/(:num)/(:num)'] = 'online-quiz/quiz/showQuestionForQuizId/$1/$2/$3';
$route['online-quiz-result/(:any)/(:num)/(:num)'] = 'online-quiz/quiz/showResultForQuizId/$1/$2/$3';



//Coding Contest


//Admin Home
 $route['admin'] = 'admin/adminHome/showAdminHomePage'; 
 
// Admin Tutorials
$route['admin/add-tutorial'] = 'admin/tutorial/showAddTutorialForm';


//Admin Topics 
$route['admin/topic-service/get-child-topics/(:num)'] = 'admin/topicService/getChildTopics/$1';

 
 
 
 


//Approval 


//Analytics


// Login Signup

$route['login'] = 'login-signup/login';
$route['password-change-form'] = 'login-signup/login/viewPasswordChangeForm'; 
$route['login-service/change-password'] = 'login-signup/loginService/changePassword'; 

$route['logout'] = 'login-signup/login/logout'; 
$route['sign-up'] = 'login-signup/signUp';
$route['sign-up-service/sign-up'] = 'login-signup/signUpService/signUp';
$route['forgot-password'] = 'login-signup/login/forgotPassword';
$route['login-service/login-with-password'] = 'login-signup/loginService/loginWithPassword';
$route['facebook-oauth-request'] = 'login-signup/FacebookOAuthRequest';
$route['facebook-oauth-response'] = 'login-signup/FacebookOAuthResponse';
$route['google-oauth-request'] = 'login-signup/GoogleOAuthRequest';
$route['google-oauth-response'] = 'login-signup/GoogleOAuthResponse';


// Error
$route['404_override'] = 'errorHandling/pageNotFound';
$route['translate_uri_dashes'] = FALSE;
$route['no-permission'] = 'errorHandling/noPermissionPage';



