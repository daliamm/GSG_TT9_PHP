<?php 
// enum Suit: string{
//     case Heart='H';
// }

// print suit::Heart->value;
// from() // tryFrom->>  return null if not exist ?? defult value;
// enum لازم تكون معرفة بالاول  مش زي // class
enum Status :int{ /// implement interface   enum status :int implement  interface
    case ACTIVE=1;
    case INACTIVE=2;
    case BLOCKED=3;
    // function __toString(){ --- not avalable
    //     return $this->value;
    // }
 function  toString(){ 
        return $this->value;
    }

}
$x=Status::ACTIVE;
echo $x->toString();
try{
    echo $x;
    throw new Exception ('Intended error');
}catch(Exception $e){ /// interface Throwable كلهم بيورثوا منه
// echo 'error';
echo $e->getMessage();

}catch(Error $e){
echo 'Error';
}
function getEnum(){
    try{
        // echo $x;
        throw new Exception ('Intended error');
    }catch(Error $e){ /// interface Throwable كلهم بيورثوا منه
    // echo 'error';
     $test='1';
    return 'Error';
    }catch(Exception $e){
      $test='2';
      return $e->getMessage();
     }finally{
      return 'Finally'; /// return finally دائما بتتنفذ اذا مافي return بالقيمة اللي صح
    }

}
echo getEnum();
echo $test;
// error_reporting(E_NOTEST) //// log_errors() ///ini_set('error_reporting',E_ALL)//ini_get('')
/// set_error_handler() /// set_error_handler(
class ErrorHandler{
   function handler($errno,$errstr,$errofile='',$erroline='',$context=[]){ // مككن اخليها static   class name :: 
      echo  "My Handler".$errstr.'in'.$errofile.'at'.$erroline;
  }

}

set_error_handler([new ErrorHandler,'handel']);
///

















