<div class="d-sm-flex justify-content-center justify-content-sm-between">
  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © QOWWIM 'UBAIDILLAH 2020</span>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('select[name="id_bagian"]').val(id)
  })
</script>
<script>
  $(document).ready(function() {
    $('select[name="id_tipe"]').val(id1)
  })
</script>
<script>
  $(document).ready(function() {
    $('select[name="id_kategori"]').val(id2)
  })
</script>
<script>
  $(document).ready(function() {
    $('select[name="id_supplier"]').val(id3)
  })
</script>
<script>
  $(document).ready(function() {
    $('select[name="id_obat"]').val(id4)
  })
</script>
<script>
  $(document).ready(function() {
    $('select[name="id_pegawai"]').val(id5)
  })
</script>

<script language="JavaScript">
  function tampilkanjam() {
    var waktu = new Date();
    var jam = waktu.getHours();
    var menit = waktu.getMinutes();
    var detik = waktu.getSeconds();
    var teksjam = new String();

    if (menit <= 9)
      menit = "0" + menit;
    if (detik <= 9)
      detik = "0" + detik;

    teksjam = jam + ":" + menit + ":" + detik;
    tempatjam.innerHTML = teksjam;
    setTimeout("tampilkanjam()", 1000);
  }
  window.onload = tampilkanjam
</script>

<!-- Jam Analaog -->
<script type="text/javascript">
  const secondHand = document.querySelector('.jarum_detik');
  const minuteHand = document.querySelector('.jarum_menit');
  const jarum_jam = document.querySelector('.jarum_jam');

  function setDate() {
    const now = new Date();
    const seconds = now.getSeconds();
    const secondsDegrees = ((seconds / 60) * 360) + 90;
    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
    if (secondsDegrees === 90) {
      secondHand.style.transition = 'none';
    } else if (secondsDegrees >= 91) {
      secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
    }
    const minutes = now.getMinutes();
    const minutesDegrees = ((minutes / 60) * 360) + 90;
    minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
    const hours = now.getHours();
    const hoursDegrees = ((hours / 12) * 360) + 90;
    jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
  }
  setInterval(setDate, 1000)
</script>


<!-- Jam Analog -->
<script type="text/javascript">
  var canvas = document.getElementById("jamAnalog");
  var ctx = canvas.getContext("2d");
  var radius = canvas.height / 2;
  ctx.translate(radius, radius);
  radius = radius * 0.90
  setInterval(drawClock, 1000);

  function drawClock() {
    drawFace(ctx, radius);
    drawNumbers(ctx, radius);
    drawTime(ctx, radius);
  }
  //Buat Pola (Bentuk Jam Analog)
  function drawFace(ctx, radius) {
    var grad;
    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2 * Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();
    grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
    grad.addColorStop(0, '#3099F5');
    grad.addColorStop(0.5, '#FFFFFF');
    grad.addColorStop(1, '#3099F5');
    ctx.strokeStyle = grad;
    ctx.lineWidth = radius * 0.1;
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
    ctx.fillStyle = '#333';
    ctx.fill();
  }
  // Buat angka pada jam Analog
  function drawNumbers(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius * 0.15 + "px arial";
    ctx.textBaseline = "middle";
    ctx.textAlign = "center";
    for (num = 1; num < 13; num++) {
      ang = num * Math.PI / 6;
      ctx.rotate(ang);
      ctx.translate(0, -radius * 0.85);
      ctx.rotate(-ang);
      ctx.fillText(num.toString(), 0, 0);
      ctx.rotate(ang);
      ctx.translate(0, radius * 0.85);
      ctx.rotate(-ang);
    }
  }

  // Buat jarum jam dan fungsi rotasinya  
  function drawTime(ctx, radius) {
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour = hour % 12;
    hour = (hour * Math.PI / 6) +
      (minute * Math.PI / (6 * 60)) +
      (second * Math.PI / (360 * 60));
    drawHand(ctx, hour, radius * 0.5, radius * 0.07);
    //minute
    minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
    drawHand(ctx, minute, radius * 0.8, radius * 0.07);
    // second
    second = (second * Math.PI / 30);
    drawHand(ctx, second, radius * 0.9, radius * 0.02);
  }

  function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0, 0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
  }
</script>