select zipcode as 'Zip codes'
from profiles 
group by zipcode
having count(*) > 1

-- Write a query that displays only the zip code where there is more than one individual; display them in
-- ascending order. The column will be named “Zip codes”.