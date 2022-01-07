<?php


if ( !function_exists("date_range") )
{
	function date_range($data)
	{
		$result = null;
        if($data){
            try {
				//remove spaces
				$data = str_replace(' ', '', $data);

				$data = explode('-',$data);
				$from = explode('/',$data[0]);
				$to = explode('/',($data[1]?? '00/00/00'));
				$result = [
					'from' => $from[2].'-'.$from[1].'-'.$from[0].' 00:00:00',
					'to' => $to[2].'-'.$to[1].'-'.$to[0].' 23:59:59',
				];
			} catch (\Throwable $th) {
				//throw $th;
				return null;
			}
        }

        return $result;
	}
}

/*
* For admin case counter helpers
*/
if ( !function_exists("replace_space_with_dash") )
{
	function replace_space_with_dash($str)
	{
		return preg_replace('/\ +/', '-', $str);
	}
}

if ( !function_exists('caseCounter') )
{
	function caseCounter($count=null)
	{
		return $count? '<small class="nav-noti">'.$count.'</small>': null;
	}
}
if ( !function_exists('TakeCaseCounter') )
{
	function TakeCaseCounter($task=null,$take=null,$permission=false)
	{
		($task != 0 || $permission == false ) ? ($take = false) : $take;
		return $take? 'text-danger': null;
	}
}

if ( !function_exists('statusCaseCounter') )
{
	function approvedCaseCounter($count=null)
	{
		return $count? '<small class="nav-approved-noti">'.$count.'</small>': null;
	}
}






if (! function_exists('toMmNum')) {
    function toMmNum($number)
    {
        $array = [
            '0' => '၀',
            '1' => '၁',
            '2' => '၂',
            '3' => '၃',
            '4' => '၄',
            '5' => '၅',
            '6' => '၆',
            '7' => '၇',
            '8' => '၈',
            '9' => '၉',
        ];

        return strtr($number, $array);
    }
}

if ( !function_exists("remove_dash") )
{
	function remove_dash($str)
	{
		return ucwords(preg_replace('/\_+/', ' ', $str));
	}
}








