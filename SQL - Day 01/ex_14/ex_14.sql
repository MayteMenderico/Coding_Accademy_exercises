SELECT count(*) as 'Number of movies that starts with “eX"'
from movies 
where title COLLATE latin1_general_cs like 'eX%'