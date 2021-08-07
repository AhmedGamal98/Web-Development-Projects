<tr>
									<th>الأحد</th>
									<?php
	
	                                  include('../connect.php');  
										$sql = $con->prepare("SELECT
										   sechdule.* , course.Name  , teachers.Fname
										   FROM
											  sechdule
										    JOIN
											  course
											
										   ON
											  sechdule.course_id = course.course_ID
											
											JOIN
											  teachers
											   
                                            ON
											  course.teacher_ID = teachers.teacher_ID

										   WHERE sechdule.adminid=$id LIMIT 7");
										$sql->execute();
										$rows = $sql->fetchAll();
                                         
										foreach($rows as $pat)
										{
											

									   ?>
									
									   <td><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></td>
									
									  <?php }  ?>
								</tr>
								<tr>
									<th>الاثنين</th>
									<?php
	
	                                  include('../connect.php');  
										$sql = $con->prepare("SELECT
										    sechdule.* , course.Name  , teachers.Fname
										   FROM
											  sechdule
										    JOIN
											  course
											
										   ON
											  sechdule.course_id = course.course_ID
											
											JOIN
											  teachers
											   
                                            ON
											  course.teacher_ID = teachers.teacher_ID


										   WHERE sechdule.adminid=$id AND session_day='الاثنين' LIMIT 7");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{

									   ?>
									
									   <td><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></td>
									
									  <?php }  ?>
								</tr>
								<tr>
									<th>الثلاثاء</th>
									<?php
	
	                                  include('../connect.php');  
										$sql = $con->prepare("SELECT
										    sechdule.* , course.Name  , teachers.Fname
										   FROM
											  sechdule
										    JOIN
											  course
											
										   ON
											  sechdule.course_id = course.course_ID
											
											JOIN
											  teachers
											   
                                            ON
											  course.teacher_ID = teachers.teacher_ID


										   WHERE sechdule.adminid=$id AND session_day='الثلاثاء' LIMIT 7");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{

									   ?>
									
									   <td><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></td>
									
									  <?php }  ?>
								</tr>
								<tr>
									<th>الأربعاء</th>
									<?php
	
	                                  include('../connect.php');  
										$sql = $con->prepare("SELECT
										    sechdule.* , course.Name  , teachers.Fname
										   FROM
											  sechdule
										    JOIN
											  course
											
										   ON
											  sechdule.course_id = course.course_ID
											
											JOIN
											  teachers
											   
                                            ON
											  course.teacher_ID = teachers.teacher_ID


										   WHERE sechdule.adminid=$id AND session_day='الأربعاء' LIMIT 7");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{

									   ?>
									
									   <td><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></td>
									
									  <?php }  ?>
								</tr>
								<tr>
									<th>الخميس</th>
									<?php
	
	                                  include('../connect.php');  
										$sql = $con->prepare("SELECT
										    sechdule.* , course.Name  , teachers.Fname
										   FROM
											  sechdule
										    JOIN
											  course
											
										   ON
											  sechdule.course_id = course.course_ID
											
											JOIN
											  teachers
											   
                                            ON
											  course.teacher_ID = teachers.teacher_ID


										   WHERE sechdule.adminid=$id AND session_day='الخميس' LIMIT 7");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{

									   ?>
									
									   <td><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></td>
									
									  <?php }  ?>
								</tr>