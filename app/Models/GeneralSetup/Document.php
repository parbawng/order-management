<?php

namespace App\Models\GeneralSetup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
	use HasFactory;
    protected $guarded = [];

    protected $initialCode = 'dfc';
    // Drug File Code
    protected $initialNo = '000001';

    public function generateCode()
    {
    	if ( $result = $this->orderBy('id', 'desc')->whereNotNull('file_code')->first(['file_code']) ) {
    		$splittedCodes = explode('-', $result['file_code']);
    		$newCode = end($splittedCodes);
    		$newCode = ((int)ltrim($newCode, '0')) + 1;
    		$newCode = str_pad($newCode, 6, '0', STR_PAD_LEFT);
    		return $this->initialCode .'-'.$newCode;die;
    	}

    	return $this->initialCode .'-'.$this->initialNo;
    }
}
