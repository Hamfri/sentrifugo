<?php
/********************************************************************************* 
 *  This file is part of Sentrifugo.
 *  Copyright (C) 2014 Sapplica
 *   
 *  Sentrifugo is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Sentrifugo is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Sentrifugo.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Sentrifugo Support <support@sentrifugo.com>
 ********************************************************************************/

/**
 * Breadcrumbs View Helper
 *
 * A View Helper that creates the menu
 *
 *
 */
class Zend_View_Helper_Reportsheader extends Zend_View_Helper_Abstract {


	public  function reportsheader($module)
	{
	     $reportsheader = '';
		  
		    $reportsheader ='<div class="reports-block-area">';			
                         if($module != 'main')
                            $reportsheader .='<div class="reports-back-btn-div"><a href="'.BASE_URL.'/welcome" class="sprite reports-back-btn">Back to Dashboard</a><a href="'.BASE_URL.'/reports" class="sprite reports-back-btn">Back to Analytics</a>';
                         else 
                             $reportsheader .='<div class="back-page-div-report"><a href="'.BASE_URL.'/welcome" class="sprite reports-back-btn ">Back to Dashboard</a>';
			 $reportsheader .='</div>';
            $reportsheader .='<div class="reports-ctrl">';
            //$reportsheader .='<div class="reports-div" onclick="changereportsscreen(\'organizationreport\');">';
            $reportsheader .='<div class="reports-div" id="organisation_rpt_div" >';
			if($module == 'organization')
			{ 							 
			$reportsheader .='<span class="reports-sprite org-report-selected"></span>';
			$reportsheader .='<p class="one-line selected-report">Organization</p>';
			}else
			{
			$reportsheader .='<span class="reports-sprite org-report"></span>';
			$reportsheader .='<p class="one-line">Organization</p>'; 
			}
			$reportsheader .='</div>';
			
            //$reportsheader .='<div class="reports-div" id="usermanagement_rpt_div" onclick="changereportsscreen(\'mangementreport\');">';
                    $reportsheader .='<div class="reports-div" id="usermanagement_rpt_div" >';
			if($module == 'management')
			{
			$reportsheader .='<span class="reports-sprite user-report-selected"></span>';
			$reportsheader .='<p class="one-line selected-report">Users</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite user-report"></span>';
			$reportsheader .='<p class="one-line">Users</p>';
            } 			
			$reportsheader .='</div>';
			
			
            //$reportsheader .='<div class="reports-div" id="employees_rpt_div" onclick="changereportsscreen(\'employeereport\');">';
                        $reportsheader .='<div class="reports-div" id="employees_rpt_div" >';
			if($module == 'employeereport')
			{
		    $reportsheader .='<span class="reports-sprite emp-report-selected"></span>';
			$reportsheader .='<p class="one-line selected-report">Employees</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite emp-report"></span>';
			$reportsheader .='<p class="one-line">Employees</p>';
			}
		    $reportsheader .='</div>';
			
            //$reportsheader .='<div class="reports-div" id="requisition_rpt_div" onclick="changereportsscreen(\'requisitionstatusreport\');">';
                    $reportsheader .='<div class="reports-div" id="requisition_rpt_div" >';
			if($module == 'requisitionstatusreport')
			{
			$reportsheader .='<span class="reports-sprite resource-repor-selected"></span>';
	        $reportsheader .='<p class="reports-text selected-report">Resource<br />Requisition</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite resource-report"></span>';
	        $reportsheader .='<p class="reports-text">Resource<br />Requisition</p>';
			}
		    $reportsheader .='</div>';
			
            //$reportsheader .='<div class="reports-div" id = "leaves_rpt_div" onclick="changereportsscreen(\'leavesreport\');" >';
                    $reportsheader .='<div class="reports-div" id = "leaves_rpt_div" >';
			if($module == 'leavesreport')
			{
			$reportsheader .='<span class="reports-sprite leave-report-selected"></span>';
			$reportsheader .='<p class="reports-text selected-report">Employee<br />Leaves</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite leave-report"></span>';
			$reportsheader .='<p class="reports-text">Employee<br />Leaves</p>';
			}
			$reportsheader .='</div>';
			
			
            //$reportsheader .='<div class="reports-div" id="holiday_rpt_div" onclick="changereportsscreen(\'holidaygroupreports\');" >';
                        $reportsheader .='<div class="reports-div" id="holiday_rpt_div"  >';
			if($module == 'holidayreport')
			{
			$reportsheader .='<span class="reports-sprite holiday-report-selected"></span>';
			$reportsheader .='<p class="one-line selected-report">Holidays</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite holiday-report"></span>';
			$reportsheader .='<p class="one-line">Holidays</p>';
			}
			$reportsheader .='</div>';
			
            //$reportsheader .='<div class="reports-div" id="background_rpt_div" onclick="changereportsscreen(\'backgroundchecksreport\');">';
                        $reportsheader .='<div class="reports-div" id="background_rpt_div" >';
			if($module == 'backgroundreport')
			{
			$reportsheader .='<span class="reports-sprite background-report-selected"></span>';
		    $reportsheader .='<p class="reports-text selected-report">Background<br />Checks</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite background-report"></span>';
		    $reportsheader .='<p class="reports-text">Background<br />Checks</p>';
			}
			$reportsheader .='</div>';
			
            //$reportsheader .='<div class="reports-div" id="logs_rpt_div" onclick="changereportsscreen(\'activitylogreport\');" >';
                        $reportsheader .='<div class="reports-div" id="logs_rpt_div"  >';
			if($module == 'logreport')
			{
			$reportsheader .='<span class="reports-sprite logs-report-selected"></span>';
			$reportsheader .='<p class="one-line selected-report">Audit Logs</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite logs-report"></span>';
			$reportsheader .='<p class="one-line">Audit Logs</p>';
			}
			$reportsheader .='</div>';
			
			$reportsheader .='<div class="reports-div" id="servicedesk_rpt_div" >';
			if($module == 'servicedeskreport')
			{
		    $reportsheader .='<span class="reports-sprite servicedesk-report-selected"></span>';
			$reportsheader .='<p class="one-line selected-report">Service Request</p>';
			}else
            {
			$reportsheader .='<span class="reports-sprite servicedesk-report"></span>';
			$reportsheader .='<p class="one-line">Service Request</p>';
			}
		    $reportsheader .='</div>';			
			
            $reportsheader .='</div>';           
            
            $reportsheader .='<div class="reports-grid-ctrl">';

		

		echo $reportsheader;
		
	}
	

}
?>