$("#submit").click(() => {
  let name = $("#name").val();
  let email = $("#email").val();
  let gender = $("input[name='gender']:checked").val();
  let date = new Date($("#date").val());
  console.log(date);
  if (email.length < 5) {
    $("#emailError").html("Type a  email");
  }
  if (name.length == 0) {
    $("#nameError").html("Type a  name");
  }
});