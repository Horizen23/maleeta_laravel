 {{-- <p> product</p> --}}
 <form action="" id="form_id">
    <div class="form_addproduct">
    <img src="{{ asset('image/reset.svg') }}" alt=""/>
    <div class="nameform_addproduct">
        <p>เพิ่มสินค้า</p>
        <div class="btnsave">บันทึก  </div>
        <div class="testbtn">บันทึก  </div>
    </div>
    <div class="flex">
    <div class="inputform_adproduct">
        <div class="input_addproduct">
            <h1>ชื่อสินค้า</h1>
            <div class="input_apd">
                <p class="productid">Full Name</p>
                <input id="productid" type="text" name="productid">
            </div>
        </div>
        <div class="input_addproduct">
            <h1>สถานะ</h1>
            <div class="input_apd">
                <p class="statusid">Full Name</p>
                <input id="statusid" type="text" name="statusid">
            </div>
        </div>
        <div class="input_addproduct">
            <h1>จำนวน</h1>
            <div class="input_apd">
                <p class="countid">Full Name</p>
                <input id="countid" type="text" name="countid">
            </div>
        </div>
        <div class="input_addproduct">
            <h1>ราคา</h1>
            <div class="input_apd">
                <p class="pliceid" >Full Name</p>
                <input id="pliceid" type="text" name="pliceid">
            </div>
        </div>
        <div class="input_addproduct hcommentid">
            <h1>รายละเอียด</h1>
            <div class="input_apd">
                <p class="commentid">Full Name</p>
                <textarea name="commentid" id="commentid"></textarea>
            </div>
        </div>

    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <div class="form_uploadimage">
        <div class="f_head">
        <div class="dropzone">
            <div class="file-input">
                <input type="file" id="file" class="file" accept="image/png,image/jpeg"  multiple/>
                <label for="file">
                    <img class="imglod" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjU2IiB4Mj0iMjU2IiB5MT0iNDgxIiB5Mj0iMzEiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzU1NThmZiIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwYzBmZiIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyNTYiIHgyPSIyNTYiIHkxPSI0NzguNiIgeTI9IjI0MSI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjYWRkY2ZmIi8+PHN0b3Agb2Zmc2V0PSIuNTAyOCIgc3RvcC1jb2xvcj0iI2VhZjZmZiIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2VhZjZmZiIvPjwvbGluZWFyR3JhZGllbnQ+PGc+PGc+PGc+PHBhdGggZD0ibTMwNi40NzcgMzM4LjA5NWM1Ljg4Ni01LjQ0NCA5LjUyMy0xMy4yNjcgOS41MjMtMjIuMDk1IDAtMTYuODE2LTEzLjE4NC0zMC0zMC0zMHMtMzAgMTMuMTg0LTMwIDMwYzAgNC41Ljk1MiA4LjczNSAyLjY1NiAxMi41MzFsLTYyLjY1Ni0xMi41MzEtNjkgMTYxLjk5OWMyLjQwMSAxLjggNS43IDMuMDAxIDkgMy4wMDFoMjQwYzIuOTk5IDAgNi0uOTAxIDguNDAxLTIuNDAxbC0zOC40MDEtMTMyLjU5OXptMTE0LjUyMy0xODcuMDk1YzAtNjYuMTY3LTUzLjgxOC0xMjAtMTIwLTEyMC0zMS42NyAwLTYxLjkzNCAxMi43ODgtODQuNDkyIDM1LjQwNS02OC4yNjItMjAuNzcxLTEzNy44MTMgMjMuMDg2LTE1Mi4xMSA4OC44NDMtMzcuMjk0IDExLjM5Ny02NC4zOTggNDUuOTA4LTY0LjM5OCA4NS43NTIgMCA0OS42MjkgNDEuMzcxIDkwIDkxIDkwaDQ1YzguMjkxIDAgMTUtNi43MDkgMTUtMTV2LTQ1aDIxMHY0NWMwIDguMjkxIDYuNzA5IDE1IDE1IDE1aDQ1YzQ5LjYyOSAwIDkxLTQwLjM3MSA5MS05MHMtNDEuMzcxLTkwLTkxLTkweiIgZmlsbD0idXJsKCNTVkdJRF8xXykiLz48L2c+PC9nPjxnPjxnPjxwYXRoIGQ9Im0zNzYgMjQxaC0yNDBjLTguMjg0IDAtMTUgNi43MTYtMTUgMTV2MjEwYzAgNS4wOTkgMi40MDEgOS4zIDYgMTEuOTk5bDg3LjkwNC0xMTcuMjA1YzUuNzE4LTcuNjI0IDE3LjAwMi04LjA1MiAyMy4yODItLjg4NWwzNC4xMjUgMzguOTVjNS44NzEgNi43MDEgMTYuMjU1IDYuODM4IDIyLjMwMS4yOTNsOC40NTgtOS4xNTZjNi41ODgtNy4xMzIgMTguMTEzLTYuMjIxIDIzLjQ5OSAxLjg1OGw1Ny44MzEgODYuNzQ1YzMuODk5LTIuNyA2LjYtNy4xOTkgNi42LTEyLjU5OXYtMjEwYzAtOC4yODQtNi43MTYtMTUtMTUtMTV6bS05MCA5MGMtOC40MDEgMC0xNS02LjYwMS0xNS0xNSAwLTguMTk2IDYuODE0LTE1LjAwNiAxNS4wMS0xNSA4LjM5Ni4wMDUgMTQuOTkgNi42MDIgMTQuOTkgMTUgMCA4LjE5My02LjgwNyAxNS0xNSAxNXoiIGZpbGw9InVybCgjU1ZHSURfMl8pIi8+PC9nPjwvZz48L2c+PC9zdmc+" />
                    <p>เลือกรูปภาพ</p>
                </label>
            </div>
            <img class="none pre"src="#" alt="">
        </div>
        </div>
        <div class="headerlist">รูปทั้งหมด</div>
            <li class="header-listldimg-text"><p>ชือไฟล์</p><p>หลัก</p><p>คอนโซน</p></li>
        <ul class="listldimg">
    
        </li>
        </ul>
            
            
    </div>
    </div>
    </div> 
</form>


<div class="tabel">
  <div class="header_tabel">
      <div class="filter">
          <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.25 12L23.4318 4V0H0.477272V4L9.65909 12V20L14.25 16V12Z" fill="#8B83BA"/>
          </svg>
          <p>กรอง</p>
      </div>
      <div class="flex">
          {{-- <div class="exexcel btbt">
              <p>export to excel</p>
          </div> --}}
          <div class="addproduct btbt" id="btnaddproducteiei">
              <p>เพิ่มสินค้า +</p>
          </div>
      </div>


  </div>
  <div class="sssss">
  <table >
      <thead>
          <tr class="tbhead">
              <th class="headcheckbox"><input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <th>รหัสสินค้า</th>
              <th>ชื่อสินค้า</th>
              <th>สถานะ</th>
              <th>เวลาเพิ่ม</th>
              <th>จำนวน</th>
              <th class="th_tr_r">ราคา</th>
              <th style="width: 320px;"></th>
          </tr>
      </thead>

      <tbody>
          <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
          </tr>      <tr class="tbbodylist">
              <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"/><span>&nbsp;</span></td>
              <td>ML12345</td>
              <td>เสื้อยืดสไตด์</td>
              <td> 
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"/></svg>
                  วางขาย
              </td>
              <td>21/1/2562</td>
              <td>5</td>
              <td class="th_tr_r">94  ฿</td>
              <td>
                  <div class="contro">
                      <p class="a  "> show</p>
                      <p class="b ">delert</p>
                      <p class="a "> edit</p>
                  </div>

              </td>
          </tr>
      </tbody>
  </table>
</div>
  <div class="bottomtbl">
      <p>Rows per page: 10</p>

  </div>
</div>

<script>
$(document).ready(function(){
  $("#btnaddproducteiei").click(function(){
    $('.tabel').css('display','none')
    $('.form_addproduct').css('display','block')
    $('.form_addproduct').css('animation','show 2s')
  });
  $(".form_addproduct>img").click(function(){
      $('.form_addproduct').css('display','none')
      $('.tabel').css('display','block')
      $('.tabel').css('animation','show 2s')
  });
  $("input.seach").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("table tr.tbbodylist").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
});
</script>
<script>
  
  $(document).ready(function(){

$(".input_apd>input").focus(function(){
  $(this).css("border-radius","5.74px");
  $(this).css("border","2.435px solid rgb(168 163 243)");
  $(".input_apd>p."+$(this).attr('id')).css("color","rgb(168 163 243)");
  
});
$(".input_apd>input").focusout(function(){
  if($(this).val().length == 0){
      $(this).css("border","none");
      $(this).css("border-bottom","2.435px solid #D9D8EB");
      $(this).css("border-radius","0px");
      $(".input_apd>p."+$(this).attr('id')).css("color","#D9D8EB");
      }
      else{
          $(this).css("border","2.435px solid rgb(168 163 243)");
          $(this).css("border-radius","5.74px");
          $(".input_apd>p."+$(this).attr('id')).css("color","rgb(168 163 243)");
  }
});
$(".input_apd>textarea").focus(function(){
  $(this).css("border-radius","5.74px");
  $(this).css("border","2.435px solid rgb(168 163 243)");
  $(".input_apd>p."+$(this).attr('id')).css("color","rgb(168 163 243)");
  
});
$(".input_apd>textarea").focusout(function(){
  if($(this).val().length == 0){
      $(this).css("border","2.435px solid #D9D8EB");
      $(".input_apd>p."+$(this).attr('id')).css("color","#D9D8EB");
      }
      else{
          $(this).css("border","2.435px solid rgb(168 163 243)");
          $(this).css("border-radius","5.74px");
          $(".input_apd>p."+$(this).attr('id')).css("color","rgb(168 163 243)");
  }
});

});


$(document).ready(function() {
alerts= [];

$( ".file" ).on( "change", function(event) {
$(".listldimg>li").remove();
const aa = event.target.files;
for(i = 0; i < aa.length; i++){
if(aa[i].type=="image/png"||aa[i].type=="image/jpeg") alerts.push([aa[i],false]); //เอาแต่รูปภาพ
}
listfileimg();
$(".file").val("")
} );

$('.listldimg').delegate("input[name='imagsql']",'change',function() {
for (i = 0; i < alerts.length; i++) {
if(i==this.id){
alerts[this.id][1] = true;
}
else{
alerts[i][1] = false;
}
}
});

$('.listldimg').delegate('li>div.selectimg','mousedown',function() {
var file_data = alerts[this.id][0]; 
var reader = new FileReader();
reader.readAsDataURL(file_data);
reader.onload = function(e) {
  $('.pre').attr('src', e.target.result);
  $(".file-input").addClass("none");
  $("img.none").addClass("true");
}
      
});
$('.listldimg').delegate('li>div.selectimg','mouseleave',function() {
$(".file-input").removeClass("none");
$("img.none").removeClass("true");

});

$('.listldimg').delegate('li>div.delertimg','click',function() {
removeElement(alerts, this.id);
$(".listldimg>li").remove();
    listfileimg()
});

function removeElement(array, elem) {
    alerts1= [];
    for (let alert in array) {
        if(alert!==elem){alerts1.push(array[alert])}
    }
    alerts = alerts1
}

$('.testbtn').on('click',function(){
    console.log("formdata")
    console.log($("#form_id").serialize())
    console.log("file imge")
    console.log(alerts)
})

$('.btnsave').on('click', function() {
var i;
if(alerts.length){
  $(".listldimg>li").remove();
  var i;
  listfileimg()
  $('.btnsave').addClass("btnoneven")
  $('.listldimg>li.a').append(`<div class="loader"></div>`)
}
var ld = 0;


for (i = 0; i < alerts.length; i++) {
  if(alerts[i]){
  var form_data = new FormData();                  
  form_data.append('file', alerts[i][0]);
$.ajax({
  url: 'upload', // point to server-side PHP script 
  cache: false,
  contentType: false,
  processData: false,
  data: form_data,                         
  type: 'post',
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
     Aa:i
  },
  success: function(ss){
    console.log(ss);
      ld+=1
      var aa = $(`.listldimg>li.${ss}>div.loader`);
      aa.removeClass("loader")
      aa.addClass("laa")
      if(ld==alerts.length){
          setTimeout(
              function() 
              {   
                  alerts= [];
                  $('.btnsave').removeClass("btnoneven")
              }, 2000);
              ld = 0;
           }
          }
      });
  }
  else{
      if(ld==alerts.length-1){
                  $('.btnsave').removeClass("btnoneven")
              ld = 0;
           }
          ld+=1
  }

}
});




function listfileimg(){
for (i = 0; i < alerts.length; i++) {
  if(alerts[i]){
    const { name: fileName, size } = alerts[i][0];
    const fileSize = (size / 1024).toFixed(2);
    const sixx = fileSize < 1000 ? fileSize+"kb" :(fileSize / 1024).toFixed(2)+"mb";
    const fileNameAndSize =  `ชื่อไฟล์ : ${fileName} ขนาด : ${sixx}`; // checked="checked"
    if(alerts[i][1]==true){
         $(".listldimg").append(`<li class="a ${i}"><span>${fileNameAndSize}</span><div class="uplode-checkbox"><input checked="checked" type="radio" id="${i}"  class="checkbox" name="imagsql" value="${i}"/><span>&nbsp;</span></div><div class="selectimg" id="${i}">ดู</div><div class="delertimg" id="${i}">ลบ</div></li>`);
      }
      else{
        $(".listldimg").append(`<li class="a ${i}"><span>${fileNameAndSize}</span><div class="uplode-checkbox"><input type="radio" id="${i}"  class="checkbox" name="imagsql" value="${i}"/><span>&nbsp;</span></div><div class="selectimg" id="${i}">ดู</div><div class="delertimg" id="${i}">ลบ</div></li>`);
      }
  }
}

}



});

</script>