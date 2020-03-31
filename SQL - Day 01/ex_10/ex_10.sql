SELECT id as 'Identifier'
from movies
where title COLLATE latin1_swedish_ci like '%tard%'