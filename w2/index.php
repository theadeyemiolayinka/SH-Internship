<?php
/**
* Side Hustle Week Two Task.
*
* @author TheAdeyemiOlayinka
*/


/**
* Check Voter's Eligibility to vote
* 
* @param Voter $voter
*/
function isVoterEligible(Voter $voter)
{
  if($voter->age > 18){
    if($voter->hasPVC()){
      if($voter->getWard() == '020'){
        echo('Voter eligible to vote');
      }else{
        echo('Error: Voter\'s ward must be "020" to be able to vote.');
      }
    }else{
      echo('Error: Voter must have a PVC to vote.');
    }
  }else{
    echo('Error: Voter must be older than 18 years to vote.');
  }
}

?>
