$(document).ready(function() {
    // Array untuk sumber opsi posisi pekerjaan
    const posisiOptions = [
      'System Administrator',
      'Programmer',
      'Technical Writer'
    ];
  
    // Array untuk sumber opsi penempatan domisili
    const domisiliOptions = [
      'Jakarta',
      'Surabaya',
      'Bandung',
      'Yogyakarta',
      'Semarang'
    ];
  
    // Menambahkan opsi posisi pekerjaan ke dalam select
    const posisiSelect = $('#posisi');
    for (let i = 0; i < posisiOptions.length; i++) {
      const option = $('<option>').text(posisiOptions[i]);
      posisiSelect.append(option);
    }
  
    // Menambahkan opsi penempatan domisili ke dalam select
    const domisiliSelect = $('#domisili');
    for (let i = 0; i < domisiliOptions.length; i++) {
      const option = $('<option>').text(domisiliOptions[i]);
      domisiliSelect.append(option);
    }
  
    // Menangani submit form
    $('#myForm').submit(function(e) {
      e.preventDefault();
  
      // Mendapatkan nilai input
      const nama = $('#nama').val();
      const email = $('#email').val();
      const telepon = $('#telepon').val();
      const posisi = $('#posisi').val();
      const domisili = $('#domisili').val();
  
      // Menampilkan hasil isian pada form
      const hasil = `
        <p><strong>Nama:</strong> ${nama}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Nomor Telepon:</strong> ${telepon}</p>
        <p><strong>Posisi Pekerjaan:</strong> ${posisi}</p>
        <p><strong>Penempatan Domisili:</strong> ${domisili}</p>
      `;
      $('#hasil').html(hasil);
  
      // Menampilkan notifikasi sukses
      alert('Data berhasil ditampilkan.');
  
      // Mereset form
      $('#myForm')[0].reset();
    });
  });
  