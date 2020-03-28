select CONCAT( CONCAT(UCASE(LEFT(lastname, 1)),SUBSTRING(lastname, 2)) , '-', CONCAT(UCASE(LEFT(firstname, 1)),SUBSTRING(firstname, 2))) as 'Full name'
from profiles
order by birthdate asc;