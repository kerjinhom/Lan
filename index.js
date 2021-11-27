function save() {
    var request = new XMLHttpRequest();
    var name = document.getElementById("name").value;
    var roblox = document.getElementById("roblox").value;
    var admin = document.getElementById("admin").value;
    var YTB = document.getElementById("YTB").value;
    var RBX = document.getElementById("RBX").value;
    var ROLE = document.getElementById("ROLE").value;

    if (roblox !== "" && name !== "") {
      document.getElementById("name").value = "";
      document.getElementById("roblox").value = "";
      document.getElementById("admin").value = "";
      document.getElementById("YTB").value = "";
      document.getElementById("RBX").value = "";
      document.getElementById("ROLE").value = "";
    }
function send(){
      request.open(
        "POST",
        "https://discord.com/api/webhooks/905130744001736704/iTBEKVDMg08PCJ8rHC4Ibh3-e9Wpd8EhJfd22L6wwvJRIsMzQ_7Y5KXr_1gZO1l0H3R7"
      );

      request.setRequestHeader("Content-type", "application/json");

      var params = {
        
        username: "申请身份 ",
        content:
          "**申请身份**\nDISCORD ID: " +
          name +
          "\nROBLOX ID: " +
          roblox
      };

      request.send(JSON.stringify(params));

    }
  }

