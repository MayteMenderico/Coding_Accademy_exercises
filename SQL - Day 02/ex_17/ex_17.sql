UPDATE movies

SET producer_id = ( select producer_id
from movies, producers
where movies.producer_id = producers.id and producers.name like '%film'
group by movies.producer_id
order by count(*)
limit 1 )

where producer_id IS NULL;

-- Update the field producer_id in the movies table. When the field is not defined, set it to the id of the producer who has the less movies, moreover the producer name must finish by “film”.