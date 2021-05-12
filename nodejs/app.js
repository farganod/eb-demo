// var express = require('express'); 
// var app = express(); 
// var publicDir = require('path').join(__dirname,'/images'); 
// app.use(express.static(publicDir)); 

const port = process.env.PORT || 3000,
  //mysql = require("mysql"),
  http = require("http"),
  fs = require("fs"),
  //html_disconnected = fs.readFileSync("index_disconnected.html"),
  html_connected = fs.readFileSync("index_connected.html");

const try_connect_sql = async (host, user, pass, db) => {
  const con = mysql.createConnection({
      host: host,
      user: user,
      password: pass
  });
  
  con.connect(function(err) {
      if (err) throw err;
      console.log("Connected!");
      con.end();
  });
};
*/
var server = http.createServer(async (req, res) => {
  if (req.method === "GET") {
    res.writeHead(200, "OK", { "Content-Type": "text/html" });
    //const result = await try_connect_sql(process.env.host_name,process.env.user_name,process.env.password,process.env.dbname);
    //res.write(result ? html_connected : html_disconnected);
    res.write(html_connected);
  } else {
    res.writeHead(405, "Method Not Allowed", { "Content-Type": "text/plain" });
  }
  res.end();
});

// Listen on port 3000, IP defaults to 127.0.0.1
server.listen(port);

// Put a friendly message on the terminal
console.log("Server running at http://127.0.0.1:" + port + "/");