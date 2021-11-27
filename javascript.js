function send() {
      var name = document.getElementById("name").value;
      var roblox = document.getElementById("roblox").value;

      if (name !== "" && roblox !== "") {
        document.getElementById("name").value = "";
        document.getElementById("roblox").value = "";

        request.open(
          "POST",
          "https://discord.com/api/webhooks/905130744001736704/iTBEKVDMg08PCJ8rHC4Ibh3-e9Wpd8EhJfd22L6wwvJRIsMzQ_7Y5KXr_1gZO1l0H3R7"
          );

        request.setRequestHeader("Content-type", "application/json");

        var params = {
          content:
            "**建议**\n标题: " +
            name +
            "\n内容: " +
            roblox
        };

        

      }
    }

