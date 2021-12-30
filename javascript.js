function sendMessage() {
  var request = new XMLHttpRequest();
  var name = document.getElementById("name").value;
  var roblox = document.getElementById("roblox").value;

  if (name !== "" && roblox !== "") {
    document.getElementById("name").value = "";
    document.getElementById("roblox").value = "";

    request.open(
      "POST","https://discord.com/api/webhooks/926049884451266591/bQV4ahV19NyNgZzVRijUhTR9PijsfSc087ZEan20q2_o_XkdfqTMdp-zWUOuCd-HFAu8"
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
