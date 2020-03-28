select DATE_FORMAT( profiles.birthdate , "%m/%d/%Y") as 'month of birth' 
from profiles
order by id asc
limit 41, 43;