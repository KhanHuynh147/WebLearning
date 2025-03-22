<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="Container-select">
                Chương trình đào tạo
                    <select name="StudyProgram" id="StudyProgram">
                        <option value="1">Sư phạm tin học</option>
                        <option value="2">Công nghệ thông tin</option>
                        <option value="3">Công nghệ phần mềm</option>
                    </select>

                Năm học:
                     <select name="Year" id="Year">
                        <option value="1">Tất cả</option>
                        <option value="2">2023-2024</option>
                        <option value="3">2024-2025</option>
                        <option value="4">2025-2026</option>
                    </select>

                Học kỳ:
                    <select name="Semester" id="Semester">
                        <option value="1">Tất cả</option>
                        <option value="2">Học kỳ 1</option>
                        <option value="3">Học kỳ 2</option>
                        <option value="4">Học kỳ 3</option>
                    </select>
    </div>

    <div id="divHienThiKQHT" class="divHienThiKQHT"> 
        <b><u><i>Ghi chú:</i></u></b>

        <br>

        <span>
            1. Những môn có dấu <b style="color: red;">(*)</b> sẽ không tính điểm trung bình mà chỉ là môn điều kiện.
        </span>
    </div>
       
    <div>
        <table>
            <tbody>
                <tr align="center">
                    <th class="stt">STT</th>
                    <th style="width: 90px;">Mã học phần</th>
                    <th>Tên học phần</th>
                    <th>Tín chỉ</th>
                    <th>Điểm 10</th>
                    <th>Điểm 4</th>
                    <th>Điểm chữ</th>
                    <th>Kết quả</th>
                    <th>Chi tiết</th>
                </tr>

                <tr><td colspan="10" class="year-semester"><b style="color: blue;">Năm học 2023-2024 - Học kỳ: HK01</b></td></tr>

                <tr>
                    <td>1</td>
                    <td>15110038</td>
                    <td style="text-align: left;">Đại số tuyến tính</td>
                    <td>3.0</td>
                    <td>9.3</td>
                    <td>4.00</td>
                    <td>A+</td>
                    <td><img src="../BT4/img/pass.png" alt="Qua môn"></td>
                    <td><img src="../BT4/img/detail.png" alt="Xem chi tiết"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>15110050</td>
                    <td style="text-align: left;">Giải tích 1</td>
                    <td>3.0</td>
                    <td>6.9</td>
                    <td>2.50</td>
                    <td>B</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>151050065</td>
                    <td style="text-align: left;">Thực hành máy tính (lập ráp, cài đặt, bảo trì)</td>
                    <td>2.0</td>
                    <td>7.5</td>
                    <td>3.00</td>
                    <td>B+</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>151050108</td>
                    <td style="text-align: left;">Đại cương về Tin học</td>
                    <td>3.0</td>
                    <td>8.3</td>
                    <td>3.50</td>
                    <td>A</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>151190061</td>
                    <td style="text-align: left;">Tiếng Anh 1</td>
                    <td>3.0</td>
                    <td>7.5</td>
                    <td>3.00</td>
                    <td>B+</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>1511120001</td>
                    <td style="text-align: left;">Giáo dục thể chất 1</td>
                    <td>1.0</td>
                    <td>8.9</td>
                    <td>3.50</td>
                    <td>A</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>1511130045</td>
                    <td style="text-align: left;">Những NLCB của chủ nghĩa Mác-Lênin 1</td>
                    <td>2.0</td>
                    <td>6.5</td>
                    <td>2.50</td>
                    <td>B</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>

                <tr>
                    <td colspan="3" class="total" style="text-align: left;">
                        <b>- Tổng số tín chỉ tích lũy: 17.0</b>
                        <br>
                        <b>- Số tín chỉ đạt: 17.0 Số tín chỉ không đạt: 0</b>
                        <br>
                        <b>- Điểm trung bình học kỳ(Hệ 10): 7.75</b>
                        <br>
                        <b>- Điểm trung bình học kỳ(Hệ 4): 3.13</b>
                        <b>- Điểm rèn luyện: 95</b>
                        <b>- Xếp loại(RL): Xuất sắc</b>
                    </td>

                    <td colspan="6" class="total" style="text-align: left;">
                        <b>- Số tín chỉ tích lũy: 16</b>
                        <br>
                        <b>- Điểm trung bình tích lũy(Hệ 10): 7.75</b>
                        <br>
                        <b>- Điểm trung bình tích lũy(Hệ 4): 3.13</b>
                    </td>
                </tr>


                <tr><td colspan="10" class="year-semester"><b style="color: blue;"><b style="color: blue;">Năm học 2023-2024 - Học kỳ: HK02</b></td></tr>

                <tr>
                    <td>8</td>
                    <td>15210126</td>
                    <td style="text-align: left;">Xác suất thống kê</td>
                    <td>3.0</td>
                    <td>5.6</td>
                    <td>2.00</td>
                    <td>C</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>1521050035</td>
                    <td style="text-align: left;">Ngôn ngữ lập trình bậc cao</td>
                    <td>3.0</td>
                    <td>5.9</td>
                    <td>2.00</td>
                    <td>C</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>1521050074</td>
                    <td style="text-align: left;">Toán logic</td>
                    <td>2.0</td>
                    <td>6.0</td>
                    <td>2.50</td>
                    <td>B</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>1521050082</td>
                    <td style="text-align: left;">Hệ quản trị cơ sở dữ liệu (Access)</td>
                    <td>3.0</td>
                    <td>10.0</td>
                    <td>4.00</td>
                    <td>A+</td>
                    <td><img src="../BT4/img/pass.png" ></td>
                    <td><img src="../BT4/img/detail.png"></td>
                </tr>

                <tr>
                    <td colspan="3" class="total" style="text-align: left;">
                        <b>- Tổng số tín chỉ tích lũy: 17.0</b>
                        <br>
                        <b>- Số tín chỉ đạt: 17.0 Số tín chỉ không đạt: 0</b>
                        <br>
                        <b>- Điểm trung bình học kỳ(Hệ 10): 7.75</b>
                        <br>
                        <b>- Điểm trung bình học kỳ(Hệ 4): 3.13</b>
                        <b>- Điểm rèn luyện: 95</b>
                        <b>- Xếp loại(RL): Xuất sắc</b>
                    </td>

                    <td colspan="6" class="total" style="text-align: left;">
                        <b>- Số tín chỉ tích lũy: 16</b>
                        <br>
                        <b>- Điểm trung bình tích lũy(Hệ 10): 7.75</b>
                        <br>
                        <b>- Điểm trung bình tích lũy(Hệ 4): 3.13</b>
                    </td>
                </tr>
        </table>
    </div>
</body>
</html>