CREATE TABLE users (
  user_id BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
  username VARCHAR(60)  NOT NULL DEFAULT '',
  user_email VARCHAR(100) NOT NULL DEFAULT '',
  user_status INT NOT NULL DEFAULT '0'
);

INSERT INTO users (
  username,
  user_email,
  user_status
) VALUES
  ('tyler', 'tyler@exmple.com', 0),
  ('funqui', 'funqui@example.com', 1),
  ('coco', 'coco@exmple.com', 2),
  ('jorge', 'jorge@exmple.com', 0),
  ('ale', 'ale@exmple.com', 1);
