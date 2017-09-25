PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: article
DROP TABLE IF EXISTS article;
CREATE TABLE article (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title STRING,
  description STRING,
  full_text TEXT
);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;