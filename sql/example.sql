GRANT ALL 
ON  feedback
TO  davidking;

ALTER TABLE feedback
  ALTER COLUMN body TYPE VARCHAR(500);


CREATE TABLE feedback(
   id SERIAL PRIMARY KEY NOT NULL,
   name VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   body VARCHAR(500) NOT NULL,
   date DATE NOT NULL DEFAULT CURRENT_DATE 
);

SELECT *
FROM feedback;

INSERT INTO feedback(
  name,
  email,
  body 
) VALUES (
'jack',
'jack@example.com',
'the website is awesome!'
);

DELETE FROM feedback
WHERE id = 1;

