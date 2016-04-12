<?php

namespace Anax\UVC;

/**
 * Description of CUserBase
 *
 * @author urbvik
 */
class CUserBase extends \Anax\UVC\CDatabaseModel  {
  
  private $usersTableName;
  
   public function __construct($tableName=null)
  {
    if($tableName==null)
      die("CUserBase - table name of users required!");
    else
      $this->usersTableName=$tableName;
  }
  
  public function logIn($name=null, $pass=null){
    $this->db->select('acronym, name, email')
              ->from($this->usersTableName)
              ->where("id = 1");

     $this->db->execute();
     
    $res = $this->db->fetchOne();
   
 
   $this->session->set('user', $res);
  }
  
  public function logOut(){
    
    //unload user from session
   $usrSes =  $this->session->set('user',null);
    
  }
   
  public function getUserInfo(){
  
   //load user from session
   $usrSes =  $this->session->get('user', []);
   
   //return user data from session
   if($usrSes!=null)
    return $usrSes;
   else
     return false;
  }
  
  public function isAuthorised(){
   
    $user = $this->session->get('user', []);
    
    if($user==null || empty($user->name) || empty($user->acronym) || empty($user->email))
      return false;
    else
      return true;
  }
  
  
  public function getLoginForm(){
    
    return <<< HTML
    <h1>This is some random login form</h1>
    As said before it is some random login form...
HTML;
  }
  
  
  
 
  
 
}
