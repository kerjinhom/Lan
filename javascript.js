function sendMessage() {
  var request = new XMLHttpRequest();
  var name = document.getElementById("name").value;
  var roblox = document.getElementById("roblox").value;

  if (name !== "" && roblox !== "") {
    document.getElementById("name").value = "";
    document.getElementById("roblox").value = "";

    request.open(
      "POST","https://discord.com/api/webhooks/918077890539704320/Z05mUmFb4VQqvKBxMDGkqSgIHDsGDAMBR1_HJTD0bv3JwF6FytACyxxQMs99RwrGy4Y2"
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