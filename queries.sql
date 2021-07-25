select name, wage, chief_id from person as SW  where wage > (select wage from person where id = SW.chief_id ) ;

select * from branch INNER JOIN person on branch.id = office_id  where wage = (select MAX(wage) from person where office_id = branch.id)    ;

select count (*) from person as SW where chief_id = SW.id;

select id, name, (select SUM(wage) from person as PR where PR.office_id = BR.id )  from branch as BR;

