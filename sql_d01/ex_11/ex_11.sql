SELECT count(*) as 'Number of movies ending with”tion"'
from movies
where title COLLATE latin1_swedish_ci like '%tion'