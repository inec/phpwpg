$cfg = new \Spot\Config();
// MySQL
$cfg->addConnection('mysql', 'mysql://user:password@localhost/database_name');
// Sqlite
$cfg->addConnection('sqlite', 'sqlite://path/to/database.sqlite');
$spot = new \Spot\Locator($cfg);