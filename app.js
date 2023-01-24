console.log("Connection Successful");

var app = new Vue({
  el: "#app",
  data: {
    message: "StayInn",
    users: "",
  },
  mounted() {
    // --- call to php database connector [displays MySQL table in the DOM]
    axios
      .get("./src/data/DatabaseConnector.php")
      .then(function (response) {
        app.users = response.data;
        console.log(response.data);
      })
      .catch(function (error) {
        console.log(error);
      });
  },
});
