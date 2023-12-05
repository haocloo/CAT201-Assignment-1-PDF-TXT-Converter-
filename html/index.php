<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF and TXT Converter</title>
  <link rel="stylesheet" type="text/css" href="../css/output.css">
  <style>
    body {
      background-image: url('../images/Fall Tree.jpg');
      background-size: cover;
      /* or 'contain' depending on your preference */
      background-repeat: no-repeat;
      background-attachment: fixed;
      /* Fixed background */
      margin: 0;
      /* Remove default margin */
      margin-top: 50px; 
      /* Adjust the value based on the height of your fixed header */
      padding: 0;
      /* Remove default padding */
    }
    .font-header {
      font-family: 'Cambria', sans-serif; 
      font-style: italic;
    }
  </style>
</head>

<body class="bg-gray-100 font-sans">
<div class="fixed top-0 w-full text-center p-4 text-white text-2xl font-header" style="background-image: url('../images/Header.jpg');">
  <h1 style="font-size: 40px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); letter-spacing: 2px; text-transform: uppercase;"> PDF TO TXT CONVERTER</h1>
</div>

  <div class="container mx-auto p-8">
    
    <div class="bg-white p-8 rounded shadow-lg">
      <div class="text-3xl font-bold mb-4">PDF and TXT Converter</div>
      <div class="text-gray-700">Easily convert PDF to TXT and TXT to PDF without installing any software.</div>
    </div>

    <div class="mt-4"></div>

    <div class="container mx-auto p-8 bg-yellow-100 bg-opacity-80 border-orange-500 border rounded">

      <!-- Form for PDF file upload -->
      <form action="../php/convert_pdf_to_txt.php" method="POST" enctype="multipart/form-data" class="mt-4">
        <label for="pdf-file" class="text-lg font-semibold">Select PDF File to Convert to TXT</label>
        <input type="file" name="user-file[]" id="pdf-file" accept=".pdf" class="mt-2 p-2 border rounded" multiple required>
        <div class="flex flex-row gap-5 mt-4">
          <input type="submit" value="Submit" class="bg-red-500 hover:bg-red-700 text-white font-bold h-10 px-4 rounded">
          <div id="txt-message">
            <?php
            if (isset($_SESSION['txt-message'])) {
              echo $_SESSION['txt-message'];
              unset($_SESSION['txt-message']);
            }
            ?>
          </div>
        </div>
      </form>

      <!-- Form for TXT file upload -->
      <form action="../php/convert_txt_to_pdf.php" method="POST" enctype="multipart/form-data" class="mt-8">
        <label for="txt-file" class="text-lg font-semibold">Select TXT File to Convert to PDF</label>
        <input type="file" name="user-file[]" id="txt-file" accept=".txt" class="mt-2 p-2 border rounded" multiple required>
        <div class="flex flex-row gap-5 mt-4">
          <input type="submit" value="Submit" class="bg-red-500 hover:bg-red-700 text-white font-bold h-10 px-4 rounded">
          <div id="pdf-message">
            <?php
            if (isset($_SESSION['pdf-message'])) {
              echo $_SESSION['pdf-message'];
              unset($_SESSION['pdf-message']);
            }
            ?>
          </div>
        </div>
      </form>

      <!-- Button to download CSV file -->
      <a href="../csv/sample.csv" download class="download-btn mt-8 inline-flex items-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Download Sample CSV
      </a>
    </div>
  </div>

  <div class="container mx-auto p-8">
    <!-- Instructions for PDF to TXT conversion -->
    <div class="mt-1 float-left w-1/2 border rounded p-4 bg-gray-100">
      <div class="text-2xl font-bold mb-2 text-blue-500">How to Convert PDF to TXT:</div>
      <ol class="list-decimal pl-6">
        <li>Choose the PDF file from your laptop.</li>
        <li>Click the <span class="font-semibold text-blue-700 !important">Submit</span> button.</li>
        <li>Wait patiently while the system converts the file to TXT.</li>
        <li>Once the conversion is complete, press the <span class="font-semibold text-blue-700 !important">Download</span> button to get the TXT file.</li>
      </ol>
    </div>

    <!-- Instructions for TXT to PDF conversion -->
    <div class="mt-1 float-right w-1/2 border rounded p-4 bg-gray-100">
      <div class="text-2xl font-bold mb-2 text-blue-500">How to Convert TXT to PDF:</div>
      <ol class="list-decimal pl-6">
        <li>Choose the TXT file from your laptop.</li>
        <li>Click the <span class="font-semibold text-blue-700 !important">Submit</span> button.</li>
        <li>Wait patiently while the system converts the file to PDF.</li>
        <li>Once the conversion is complete, press the <span class="font-semibold text-blue-700 !important">Download</span> button to get the PDF file.</li>
      </ol>
    </div>
  </div>
  <div class="text-center bg-white bg-opacity-50 w-full h-auto mt-8 rounded">
  <div class="text-black">Prepared by: Yeo Din Song, Loo Chi Hao, Lim Yong Jun, Lim Jia Liang</div>
  <div class="text-black">© 2023 PDF and TXT Converter. All rights reserved.</div>
</div>

</body>

</html>