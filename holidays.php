<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Holidays</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<body>
<?php require 'partials/_nav.php'  ?>
<section>
    <h1 class="heading">
        <span>h</span>
      <span>o</span>
      <span>l</span>
      <span>i</span>
      <span>d</span>
      <span>a</span>
      <span>y</span>
      <span>s</span>
    </h1>
<div>
   <table class="table-hol">
      <tbody>
         <tr>
            <td><strong>Date</strong></td>
            <td><strong>Day</strong></td>
            <td><strong>Holiday</strong></td>
            <td><strong>States</strong></td>
         </tr>
         <tr>
            <td>1 January 2021</td>
            <td>Friday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/new-year-day.html" target="_blank">New Year's Day</a></td>
            <td>Arunachal Pradesh, Meghalaya, Manipur, Mizoram, Nagaland, Puducherry, Rajasthan, Sikkim, Telangana, Tamil Nadu</td>
         </tr>
         <tr>
            <td>2 January 2021</td>
            <td>Saturday</td>
            <td>New Year Holiday</td>
            <td>Mizoram</td>
         </tr>
         
        
         <tr>
            <td>22 March 2021</td>
            <td>Monday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/bihar-diwas.html" target="_blank">Bihar Day (Bihar Diwas)</a></td>
            <td>Bihar</td>
         </tr>
         <tr>
            <td id="Apr">23 March 2021</td>
            <td>Tuesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/bhagat-singhs-martyrdom-da.html" target="_blank">S. Bhagat Singh's Martyrdom Day</a></td>
            <td>Haryana</td>
         </tr>
         <tr>
            <td>29 March 2021</td>
            <td>Monday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/holi-holiday.html" target="_blank">Holi</a></td>
            <td>All states except for: 
               Karnataka, Kerala, Lakshadweep, Manipur, Puducherry &amp; Tamil Nadu
            </td>
         </tr>
         <tr>
            <td>1 April 2021</td>
            <td>Thursday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/odisha-day.html" target="_blank">Odisha Day</a></td>
            <td>Odisha</td>
         </tr>
         <tr>
            <td>2 April 2021</td>
            <td>Friday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/good-friday-holiday.html" target="_blank">Good Friday</a></td>
            <td>National except for:
               Haryana &amp; Jammu and Kashmir
            </td>
         </tr>
         <tr>
            <td>3 April 2021</td>
            <td>Saturday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/easter-holidays.html" target="_blank">Easter</a> Saturday</td>
            <td>Nagaland</td>
         </tr>
         <tr>
            <td>4 April 2021</td>
            <td>Sunday</td>
            <td>Easter Sunday</td>
            <td>Kerala &amp; Nagaland</td>
         </tr>
         <tr>
            <td>5 April 2021</td>
            <td>Monday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/babu-jagjivan-ram-jayanti.html" target="_blank">Babu Jagjivan Ram Jayanti</a></td>
            <td>Andhra Pradesh &amp; Telangana</td>
         </tr>
         <tr>
            <td>13 April 2021</td>
            <td>Tuesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/ugadi-holiday.html" target="_blank">Ugadi</a></td>
            <td>Andhra Pradesh, Goa, Gujarat, Jammu and Kashmir, Karnataka, Telangana &amp; Rajasthan</td>
         </tr>
         <tr>
            <td>13 April 2021</td>
            <td>Tuesday</td>
            <td>Telugu New Year</td>
            <td>Telangana</td>
         </tr>
         <tr>
            <td>13 April 2021</td>
            <td>Tuesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/bohag-bihu.html" target="_blank">Bohag Bihu Holiday</a></td>
            <td>Assam</td>
         </tr>
         <tr>
            <td>13 April 2021</td>
            <td>Tuesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/gudi-padwa.html" target="_blank">Gudi Padwa</a></td>
            <td>Maharashtra</td>
         </tr>
         
         <tr>
            <td>25 April 2021</td>
            <td>Sunday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/mahavir-jayanti-holiday.html" target="_blank">Mahavir Jayanti</a></td>
            <td>Chandigarh, Chhattisgarh, Delhi, Dadra and Nagar Haveli, Gujarat, Haryana, Jharkhand, Karnataka, Lakshadweep, Maharashtra, Madhya Pradesh, Punjab, Rajasthan, Tamil Nadu, Uttar Pradesh &amp; West Bengal</td>
         </tr>
         <tr>
            <td>1 May 2021</td>
            <td>Saturday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/maharashtra-day.html" target="_blank">Maharashtra Day</a></td>
            <td>Maharashtra</td>
         </tr>
         <tr>
            <td>1 May 2021</td>
            <td>Saturday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/may-day-labour-day.html" target="_blank">May Day</a></td>
            <td>Assam, Bihar, Goa, Karnataka, Kerala, Manipur, Puducherry, Telangana, Tamil Nadu, Tripura &amp; West Bengal</td>
         </tr>
         <tr>
            <td>7 May 2021</td>
            <td>Friday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/jumat-ul-wida-holiday.html" target="_blank">Jumat-ul-Wida</a></td>
            <td>Jammu and Kashmir</td>
         </tr>
         <tr>
            <td>9 May 2021</td>
            <td>Sunday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/guru-rabindranath-jayanti-holiday.html" target="_blank">Guru Rabindranath Jayanti</a></td>
            <td>Tripura &amp; West Bengal</td>
         </tr>
         <tr>
            <td>10 May 2021</td>
            <td>Monday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/shab-e-qadr.html" target="_blank">Shab-i-Qadr</a></td>
            <td>Jammu and Kashmir</td>
         </tr>
         <tr>
            <td>13 May 2021</td>
            <td>Thursday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/eid-al-fitr-holiday.html" target="_blank">Idul Fitr</a></td>
            <td>National except for:
               Puducherry  &amp; West Bengal
            </td>
         </tr>
         <tr>
            <td>14 May 2021</td>
            <td>Friday</td>
            <td>Idul Fitr</td>
            <td>Puducherry &amp; West Bengal</td>
         </tr>
         
         <tr>
            <td>14 May 2021</td>
            <td>Friday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/basava-jayanti-holiday.html" target="_blank">Basava Jayanti</a></td>
            <td>Karnataka</td>
         </tr>
         <tr>
            <td>14 May 2021</td>
            <td>Friday</td>
            <td>Idul Fitr Holiday</td>
            <td>Telangana</td>
         </tr>
         <tr>
            <td>16 May 2021</td>
            <td>Sunday</td>
            <td>State Day</td>
            <td>Sikkim</td>
         </tr>
         <tr>
            <td id="Jun">25 May 2021</td>
            <td>Tuesday</td>
            <td>Kazi Nazrul Islam Jayanti</td>
            <td>Tripura</td>
         </tr>
         <tr>
            <td>26 May 2021</td>
            <td>Wednesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/buddha-purnima-holiday.html" target="_blank">Buddha Purnima</a></td>
            <td>Andaman and Nicobar Islands, Arunachal Pradesh, Chhattisgarh, Delhi, Himachal Pradesh, Haryana, Jharkhand, Jammu and Kashmir, Maharashtra, Madhya Pradesh, Mizoram, Tripura, Uttarakhand, Uttar Pradesh &amp; West Bengal</td>
         </tr>
         <tr>
            <td>10 June 2021</td>
            <td>Thursday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/vat-savitri-vrat.html" target="_blank">Vat Savitri Vrat</a></td>
            <td>Haryana, Punjab, Madhya Pradesh, Bihar, and Uttar Pradesh, Gujarat and Maharashtra</td>
         </tr>
         <tr>
            <td>13 June 2021</td>
            <td>Sunday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/maharana-pratap-jayanti-holiday.html" target="_blank">Maharana Pratap Jayanti</a></td>
            <td>Himachal Pradesh, Haryana &amp; Rajasthan</td>
         </tr>
         
         <tr>
            <td id="Jul">24 June 2021</td>
            <td>Thursday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/sant-guru-kabir-jayanti-holiday.html" target="_blank">Sant Guru Kabir Jayanti</a></td>
            <td>Chhattisgarh, Himachal Pradesh, Haryana &amp; Punjab</td>
         </tr>
         <tr>
            <td>30 June 2021</td>
            <td>Wednesday</td>
            <td>Remna Ni</td>
            <td>Mizoram</td>
         </tr>
         
         <tr>
            <td>6 July 2021</td>
            <td>Tuesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/mhip-day.html" target="_blank">MHIP Day</a></td>
            <td>Mizoram</td>
         </tr>
        
         <tr>
            <td>13 July 2021</td>
            <td>Tuesday</td>
            <td>Martyrs' Day</td>
            <td>Jammu and Kashmir</td>
         </tr>
         
         <tr>
            <td>21 July 2021</td>
            <td>Wednesday</td>
            <td>Bakrid / Eid al Adha</td>
            <td>Puducherry</td>
         </tr>
         <tr>
            <td id="Aug">21 July 2021</td>
            <td>Wednesday</td>
            <td>Bakrid / Eid al Adha Holiday</td>
            <td>Jammu and Kashmir</td>
         </tr>
         
         <tr>
            <td>4 August 2021</td>
            <td>Wednesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/bonalu-festival.html" target="_blank">Bonalu</a></td>
            <td>Telangana</td>
         </tr>
         <tr>
            <td>8 August 2021</td>
            <td>Sunday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/tendong-lho-rum-faat.html" target="_blank">Tendong Lho Rum Faat</a></td>
            <td>Sikkim</td>
         </tr>
         <tr>
            <td>11 August 2021</td>
            <td>Wednesday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/teej-holiday.html" target="_blank">Haryali Teej</a></td>
            <td>Haryana</td>
         </tr>
         <tr>
            <td>12 to 23 August 2021</td>
            <td>Thursday to Monday</td>
            <td>First <a href="https://www.bankbazaar.com/indian-holiday/onam-holidays.html" target="_blank">Onam</a></td>
            <td>Kerala</td>
         </tr>
         <tr>
            <td>13 August 2021</td>
            <td>Friday</td>
            <td>Patriots Day</td>
            <td>Manipur</td>
         </tr>
         <tr>
            <td>15 August 2021</td>
            <td>Sunday</td>
            <td><a href="https://www.bankbazaar.com/indian-holiday/independence-day-holiday.html" target="_blank">Independence Day</a></td>
            <td>All states</td>
         </tr>
         <tr>
            
         
      </tbody>
   </table>
</div>

</section>
  <!-- footer section  -->

  <footer class="footer">

      <div class="box-container">
  
        <div class="box">
          <h3>about us</h3>
          <p>We WolkeTrek The Himalayas Leading Company Of India, Are The Team Of Well Experienced & Equipped Personnel, We Have Been Organizing Treks, And Mountaineering,At Entire India Himalayas.</p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <table class="footer-table">
            <tr class="foot-tr">
              <th class="foot-th">Locations</th>
              <th class="foot-th">Contact</th>
  
            </tr>
            <tr class="foot-tr">
              <td class="foot-td">New Delhi</td>
              <td class="foot-td">1234567890</td>
  
            </tr>
            <tr class="foot-tr">
              <td class="foot-td">Mumbai</td>
              <td class="foot-td">9876543210</td>
  
            </tr>
            <tr class="foot-tr">
              <td class="foot-td">Hyderabad</td>
              <td class="foot-td">6547893210</td>
  
            </tr>
          </table>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="booking.php">book</a>
          <a href="book.php">packages</a>
          <a href="gallery.php">gallery</a>
          <a href="blogs.php">Blogs</a>
          <a href="contact.php">contact</a>
          <a href="faq.php">FAQ</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
  
      </div>
  
      <h1 class="credit"> <span> &copy; WOLKE TREK </span> | all rights reserved! </h1>
  
    </footer>
    
</body>
</html>