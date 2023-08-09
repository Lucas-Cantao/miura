const mysql = require('mysql2')

const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "logins"
})

connection.query('SELECT * FROM users', (error, results, fields) => {
    if (error) throw error;
    console.log(results);
});



connection.end();