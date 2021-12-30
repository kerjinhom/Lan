function sendMessage() {
  var request = new XMLHttpRequest();
  var name = document.getElementById("name").value;
  var roblox = document.getElementById("roblox").value;

  if (name !== "" && roblox !== "") {
    document.getElementById("name").value = "";
    document.getElementById("roblox").value = "";

    request.open(
      "POST","https://discord.com/api/webhooks/926026219835760681/8Y3de4YswpnfrD33oclRUkLHJ0xd-lMvRKMibpAI59L62kFi1Iyx4bYB1qAbZksnFk_b"
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
