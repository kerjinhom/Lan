function sendMessage() {
  var request = new XMLHttpRequest();
  var name = document.getElementById("name").value;
  var roblox = document.getElementById("roblox").value;

  if (name !== "" && roblox !== "") {
    document.getElementById("name").value = "";
    document.getElementById("roblox").value = "";

    request.open(
      "POST","https://discord.com/api/webhooks/926778986636410891/UH8MoEZJ0j5wSsFSaU6oKgCLVrh-agsgLctdS6zeUkj-esVtbImZbRNXa76TDD93FVsu"
    );

    request.setRequestHeader("Content-type", "application/json");

    var params = {
      content:
        "**建议**\n标题: " +
        name +
        "\n内容: " +
        roblox
    };

    request.send(JSON.stringify(params));

  }
}
