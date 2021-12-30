function sendMessage() {
  var request = new XMLHttpRequest();
  var name = document.getElementById("name").value;
  var roblox = document.getElementById("roblox").value;

  if (name !== "" && roblox !== "") {
    document.getElementById("name").value = "";
    document.getElementById("roblox").value = "";

    request.open(
      "POST","https://discord.com/api/webhooks/926050211078488064/RnzdhojklxI3e_6749WsbIkYfCHb6kLBGHs9H6JNsKXVxHLIioq6ch3aqcZCnX-9r92M"
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
