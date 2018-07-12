<?php include 'includes/modules/module-heading.php'; ?>
                <div class="" id="show-data">
                    <?php 
                        $divcount=1;$itemsinrowcount=1;
						//error_reporting(0);
						/* PARSE JSON FOR META */
						$json_resources_file = file_get_contents($url_scoop_make_employee_details);
						$jfo_resources = json_decode($json_resources_file);
						$resourcesfiledata = $jfo_resources->result->Result;
						$count=count($resourcesfiledata);
						foreach ($resourcesfiledata as $resource_file) {
							$resourcefile_empname=$resource_file->empname;
                            $resourcefile_empid=$resource_file->empid;
                            $resourcefile_emp_propic_link="http://www.myimss.work/apps/people/profilepic/".$resourcefile_empid.".jpg";
                            $resourcefile_data_type=$resource_file->type;
                            $resourcefile_emp_dateecho=$resource_file->date;
                            $resourcefile_emp_dateecho=date("F j", strtotime( $resourcefile_emp_dateecho ));
                            if((is_int($divcount / 5))||($divcount==1)){
                                $itemsinrowcount=1;
                    ?>
                                <div class="row container">
                                    <div class="card-deck">
                    <?php 
                            }
                                    if(($module_heading=="New Joinees")&&($resourcefile_data_type=="joiningdate"))
                                        include 'includes/modules/card-cascade-narrower.php';
                                    elseif(($module_heading=="Birthdays")&&($resourcefile_data_type=="birthday"))
                                        include 'includes/modules/card-cascade-narrower.php';
                                    $itemsinrowcount++;
                            if($itemsinrowcount==6){
                    ?>
                                    </div>
                                </div>
                    <?php 
                            }
                        $divcount++;
                        }
                    ?>
				</div>