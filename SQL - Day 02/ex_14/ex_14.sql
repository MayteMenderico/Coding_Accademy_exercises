UPDATE subscriptions
SET name = 'Premium++'
order by id DESC
limit 1;

-- Update the name of the last subscription to “Premium++”.