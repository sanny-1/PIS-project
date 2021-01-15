ALTER TABLE  `manage_news` ADD  `newsmonth` VARCHAR( 4 ) NOT NULL ,
ADD  `newsyear` VARCHAR( 4 ) NOT NULL ,
ADD  `publishdate` DATE NOT NULL ;

######################################

ALTER TABLE  `student_reg` ADD  `Father` VARCHAR( 40 ) NOT NULL ,
ADD  `Mother` VARCHAR( 40 ) NOT NULL ,
ADD  `Interests` VARCHAR( 500 ) NOT NULL ,
ADD  `About` VARCHAR( 500 ) NOT NULL ,
ADD  `Statement` VARCHAR( 500 ) NOT NULL ;

UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =1;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =2;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =3;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =4;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =5;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =6;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =7;
UPDATE  `placement`.`student_reg` SET  `Father` =  'Ram',`Mother` =  'Sita',`Interests` =  'Reading',`About` =  'Willing to work hard',`Statement` =  'Aiming for the betterment of the organisation I work for' WHERE  `student_reg`.`StudentId` =8;