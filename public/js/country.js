var c = ["-Chọn tỉnh-", "An Giang", "Bà Rịa - Vũng Tàu", "Bạc Liêu", "Bắc Kạn", "Bắc Giang", "Bắc Ninh", "Bến Tre", "Bình Dương", "Bình Định", "Bình Phước", "Bình Thuận", "Cà Mau", "Cao Bằng", "Cần Thơ", "Đà Nẵng", "Đắk Lắk", "Đắk Nông", "Đồng Nai", "Đồng Tháp", "Điện Biên", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Nội", "Hà Tĩnh", "Hải Dương", "Hải Phòng", "Hòa Bình", "Hậu Giang", "Hưng Yên", "Thành phố Hồ Chí Minh", "Khánh Hòa", "Kiên Giang", "Kon Tum", "Lai Châu", "Lào Cai", "Lạng Sơn", "Lâm Đồng", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ", "Phú Yên", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị", "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hóa", "Thừa Thiên - Huế", "Tiền Giang", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái"]
var data = [];
data[1] = ["Thành phố Long Xuyên", "Thành phố Châu Đốc", "Thị xã Tân Châu", "An Phú", "Châu Phú", "Châu Thành", "Chợ Mới", "Phú Tân", "Thoại Sơn", "Tịnh Biên", "Tri Tôn"],
    data[2] = ["Thành phố Vũng Tàu", "Thị xã Bà Rịa", "Thị xã Phú Mỹ", "Châu Đức", "Côn Đảo", "Đất Đỏ", "Long Điền", "Tân Thành", "Xuyên Mộc"],
    data[3] = ["Thành phố Bạc Liêu", "Đông Hải", "Giá Rai", "Hòa Bình", "Hồng Dân", "Phước Long", "Vĩnh Lợi"],
    data[4] = ["Thị xã Bắc Kạn", "Ba Bể", "Bạch Thông", "Chợ Đồn", "Chợ Mới", "Na Rì", "Ngân Sơn", "Pác Nặm"],
    data[5] = ["Thành phố Bắc Giang", "Hiệp Hòa", "Lạng Giang", "Lục Nam", "Lục Ngạn", "Sơn Động", "Tân Yên", "Việt Yên", "Yên Dũng", "Yên Thế"],
    data[6] = ["Thành phố Bắc Ninh", "Thị xã Từ Sơn", "Gia Bình", "Lương Tài", "Quế Võ", "Thuận Thành", "Tiên Du", "Yên Phong"],
    data[7] = ["Thành phố Bến Tre", "Ba Tri", "Bình Đại", "Châu Thành", "Chợ Lách", "Giồng Trôm", "Mỏ Cày Bắc", "Mỏ Cày Nam", "Thạnh Phú"],
    data[8] = ["Thành phố Thủ Dầu Một", "Thị xã Bến Cát", "Thị xã Tân Uyên", "Bắc Tân Uyên", "Dầu Tiếng", "Dĩ An", "Phú Giáo", "Tân Uyên", "Thuận An"],
    data[9] = ["Thành phố Quy Nhơn", "An Lão", "An Nhơn", "Hoài Ân", "Hoài Nhơn", "Phù Cát", "Phù Mỹ", "Tây Sơn", "Tuy Phước", "Vân Canh", "Vĩnh Thạnh"],
    data[10] = ["Thị xã Bình Long", "Thị xã Đồng Xoài", "Thị xã Phước Long", "Bù Đăng", "Bù Đốp", "Bù Gia Mập", "Chơn Thành", "Đồng Phú", "Hớn Quản", "Lộc Ninh", "Phú Riềng"],
    data[11] = ["Thành phố Phan Thiết", "Thị xã La Gi", "Bắc Bình", "Đảo Phú Quý", "Đức Linh", "Hàm Tân", "Hàm Thuận Bắc", "Hàm Thuận Nam", "Tánh Linh", "Tuy Phong"],
    data[12] = ["Thành phố Cà Mau", "Cái Nước", "Đầm Dơi", "Năm Căn", "Ngọc Hiển", "Phú Tân", "Thới Bình", "Trần Văn Thời", "U Minh", "Tuy Phong"],
    data[13] = ["Thị xã Cao Bằng", "Bảo Lạc", "Bảo Lâm", "Hạ Lang", "Hà Quảng", "Hòa An", "Nguyên Bình", "Phục Hòa", "Quảng Uyên", "Thạch An", "Thông Nông", "Trà Lĩnh", "Trùng Khánh"],
    data[14] = ["Quận Bình Thủy", "Quận Cái Răng", "Quận Ninh Kiều", "Quận Ô Môn", "Quận Thốt Nốt", "Thới Lai", "Cờ Đỏ", "Phong Điền", "Vĩnh Thạnh"],
    data[15] = ["Quận Cẩm Lệ", "Quận Hải Châu", "Quận Liên Chiểu", "Quận Ngũ Hành Sơn", "Quận Sơn Trà", "Quận Thanh Khê", "Hòa Vang", "Hoàng Sa"],
    data[16] = ["Thành phố Buôn Ma Thuột", "Thị xã Buôn Hồ", "Buôn Đôn", "Cư Kuin", "Cư M'gar", "Ea H'Leo", "Ea Kar", "Ea Súp", "Krông Ana", "Krông Bông", "Krông Buk", "Krông Năng", "Krông Pắc", "Lăk", "M'Đrăk"],
    data[17] = ["Thị xã Gia Nghĩa", "Cư Jút", "Dăk GLong", "Dăk Mil", "Dăk R'Lấp", "Dăk Song", "Krông Nô", "Tuy Đức"],
    data[18] = ["Thành phố Biên Hòa", "Thị xã Long Khánh", "Quận Tân Phú", "Cẩm Mỹ", "Định Quán", "Long Thành", "Nhơn Trạch", "Thống Nhất", "Trảng Bom", "Vĩnh Cửu", "Xuân Lộc"],
    data[19] = ["Thành phố Cao Lãnh", "Thị xã Sa Đéc", "Thị xã Hồng Ngự", "Châu Thành", "Cao Lãnh", "Hồng Ngự", "Lai Vung", "Lấp Vò", "Tam Nông", "Tân Hồng", "Thanh Bình", "Tháp Mười"],
    data[20] = ["Thành phố Điện Biên Phủ", "Thị xã Mường Lay", "Điện Biên", "Điện Biên Đông", "Mường Ảng", "Mường Chà", "Mường Nhé", "Nậm Pồ", "Tủa Chùa", "Tuần Giáo"],
    data[21] = ["Thành Phố Pleiku", "Thị xã An Khê", "Thị xã AYun Pa", "Chư Păh", "Chư Pưh", "Chư Sê", "ChưPRông", "Đăk Đoa", "Đăk Pơ", "Đức Cơ", "Ia Grai", "Ia Pa", "KBang", "Kông Chro", "Krông Pa", "Mang Yang", "Phú Thiện"],
    data[22] = ["Thành phố Hà Giang", "Bắc Mê", "Bắc Quang", "Đồng Văn", "Hoàng Su Phì", "Mèo Vạc", "Quản Bạ", "Quang Bình", "Vị Xuyên", "Xín Mần", "Yên Minh"],
    data[23] = ["Thành phố Phủ Lý", "Bình Lục", "Duy Tiên", "Kim Bảng", "Lý Nhân", "Thanh Liêm"],
    data[24] = ["Quận Ba Đình", "Ba Vì", "Quận Bắc Từ Liêm", "Quận Cầu Giấy", "Chương Mỹ", "Đan Phượng", "Đông Anh", "Quận Đống Đa", "Gia Lâm", "Quận Hà Đông", "Quận Hai Bà Trưng", "Hoài Đức", "Quận Hoàn Kiếm", "Quận Hoàng Mai", "Quận Long Biên", "Mê Linh", "Mỹ Đức", "Quận Nam Từ Liêm", "Phú Xuyên", "Phúc Thọ", "Quốc Oai", "Sóc Sơn", "Thị xã Sơn Tây", "Quận Tây Hồ", "Thạch Thất", "Thanh Oai", "Thanh Trì", "Quận Thanh Xuân", "Thường Tín", "Ứng Hòa"],
    data[25] = ["Thành phố Hà Tĩnh", "Thị xã Hồng Lĩnh", "Thị xã Kỳ Anh", "Cẩm Xuyên", "Can Lộc", "Đức Thọ", "Hương Khê", "Hương Sơn", "Lộc Hà", "Nghi Xuân", "Thạch Hà", "Vũ Quang"],
    data[26] = ["Thành phố Hải Dương", "Thị xã Chí Linh", "Bình Giang", "Cẩm Giàng", "Gia Lộc", "Kim Thành", "Kinh Môn", "Nam Sách", "Ninh Giang", "Thanh Hà", "Thanh Miện", "Tứ Kỳ"],
    data[27] = ["Quận Đồ Sơn", "Quận Dương Kinh", "Quận Hải An", "Quận Hồng Bàng", "Quận Kiến An", "Quận Lê Chân", "Quận Ngô Quyền", "An Dương", "An Lão", "Bạch Long Vĩ", "Cát Hải", "Kiến Thụy", "Thủy Nguyên", "Tiên Lãng", "Vĩnh Bảo"],
    data[28] = ["Thành phố Hòa Bình", "Cao Phong", "Đà Bắc", "Kim Bôi", "Kỳ Sơn", "Lạc Sơn", "Lạc Thủy", "Lương Sơn", "Mai Châu", "Tân Lạc", "Yên Thủy"],
    data[29] = ["Thành phố Vị Thanh", "Thị xã Ngã Bảy", "Châu Thành", "Châu Thành A", "Long Mỹ", "Phụng Hiệp", "Vị Thủy"],
    data[30] = ["Thành phố Hưng Yên", "Ân Thi", "Khoái Châu", "Kim Động", "Mỹ Hào", "Phù Cừ", "Tiên Lữ", "Văn Giang", "Văn Lâm", "Yên Mỹ"],
    data[31] = ["Quận 1", "Quận 2", "Quận 3", "Quận 4", "Quận 5", "Quận 6", "Quận 7", "Quận 8", "Quận 9", "Quận 10", "Quận 11", "Quận 12", "Quận Bình Tân", "Quận Bình Thạnh", "Quận Gò Vấp", "Quận Phú Nhuận", "Quận Tân Bình", "Quận Tân Phú", "Quận Thủ Đức", "Bình Chánh", "Cần Giờ", "Củ Chi", "Hóc Môn", "Nhà Bè"],
    data[32] = ["Thành phố Nha Trang", "Thị xã Cam Ranh", "Thị xã Ninh Hòa", "Cam Lâm", "Diên Khánh", "Khánh Sơn", "Khánh Vĩnh", "Trường Sa", "Vạn Ninh"],
    data[33] = ["Thành phố Rạch Giá", "Thị xã Hà Tiên", "An Biên", "An Minh", "Châu Thành", "Giang Thành", "Giồng Riềng", "Gò Quao", "Hòn Đất", "Kiên Hải", "Kiên Lương", "Phú Quốc", "Tân Hiệp", "U minh Thượng", "Vĩnh Thuận"],
    data[34] = ["Thành phố KonTum", "Đăk Glei", "Đăk Hà", "Đăk Tô", "Kon Plông", "Kon Rẫy", "Ngọc Hồi", "Sa Thầy", "Tu Mơ Rông", "Ia H' Drai"],
    data[35] = ["Thị xã Lai Châu", "Mường Tè", "Nậm Nhùn", "Phong Thổ", "Sìn Hồ", "Tam Đường", "Tân Uyên", "Than Uyên"],
    data[36] = ["Thành phố Lào Cai", "Bắc Hà", "Bảo Thắng", "Bảo Yên", "Bát Xát", "Mường Khương", "Sa Pa", "Văn Bàn", "Xi Ma Cai"],
    data[37] = ["Thành phố Lạng Sơn", "Bắc Sơn", "Bình Gia", "Cao Lộc", "Chi Lăng", "Đình Lập", "Hữu Lũng", "Lộc Bình", "Tràng Định", "Văn Lãng", "Văn Quan"],
    data[38] = ["Thành phố Bảo Lộc", "Thành phố Đà Lạt", "Bảo Lâm", "Cát Tiên", "Đạ Huoai", "Đạ Tẻh", "Đam Rông", "Di Linh", "Đơn Dương", "Đức Trọng", "Lạc Dương", "Lâm Hà"],
    data[39] = ["Thành phố Tân An", "Thị xã Kiến Tường", "Bến Lức", "Cần Đước", "Cần Giuộc", "Châu Thành", "Đức Hòa", "Đức Huệ", "Mộc Hóa", "Tân Hưng", "Tân Thạnh", "Tân Trụ", "Thạnh Hóa", "Thủ Thừa", "Vĩnh Hưng"],
    data[40] = ["Thành phố Nam Định", "Giao Thủy", "Hải Hậu", "Mỹ Lộc", "Nam Trực", "Nghĩa Hưng", "Trực Ninh", "Vụ Bản", "Xuân Trường", "Ý Yên"],
    data[41] = ["Thành phố Vinh", "Thị xã Cửa Lò", "Thị xã Hoàng Mai", "Thị xã Thái Hòa", "Anh Sơn", "Con Cuông", "Diễn Châu", "Đô Lương", "Hưng Nguyên", "Kỳ Sơn", "Nam Đàn", "Nghi Lộc", "Nghĩa Đàn", "Quế Phong", "Quỳ Châu", "Quỳ Hợp", "Quỳnh Lưu", "Tân Kỳ", "Thanh Chương", "Tương Dương", "Yên Thành"],
    data[42] = ["Thành phố Ninh Bình", "Thị xã Tam Điệp", "Gia Viễn", "Hoa Lư", "Kim Sơn", "Nho Quan", "Yên Khánh", "Yên Mô"],
    data[43] = ["Thành phố Phan Rang - Tháp Chàm", "Bác Ái", "Ninh Hải", "Ninh Phước", "Ninh Sơn", "Thuận Bắc", "Thuận Nam"],
    data[44] = ["Thành phố Việt Trì", "Thị xã Phú Thọ", "Cẩm Khê", "Đoan Hùng", "Hạ Hòa", "Lâm Thao", "Phù Ninh", "Tam Nông", "Tân Sơn", "Thanh Ba", "Thanh Sơn", "Thanh Thủy", "Yên Lập"],
    data[45] = ["Thành phố Tuy Hòa", "Thị xã Sông Cầu", "Đông Hòa", "Đồng Xuân", "Phú Hòa", "Sơn Hòa", "Sông Hinh", "Tây Hòa", "Tuy An"],
    data[46] = ["Thành phố Đồng Hới", "Thị xã Ba Đồn", "Bố Trạch", "Lệ Thủy", "Minh Hóa", "Quảng Ninh", "Quảng Trạch", "Tuyên Hóa"],
    data[47] = ["Thành phố Hội An", "Thành phố Tam Kỳ", "Bắc Trà My", "Đại Lộc", "Điện Bàn", "Đông Giang", "Duy Xuyên", "Hiệp Đức", "Nam Giang", "Nam Trà My", "Nông Sơn", "Núi Thành", "Phú Ninh", "Phước Sơn", "Quế Sơn", "Tây Giang", "Thăng Bình", "Tiên Phước"],
    data[48] = ["Thành phố Quảng Ngãi", "Ba Tơ", "Bình Sơn", "Đức Phổ", "Lý Sơn", "Minh Long", "Mộ Đức", "Nghĩa Hành", "Sơn Hà", "Sơn Tây", "Sơn Tịnh", "Tây Trà", "Trà Bồng", "Tư Nghĩa"],
    data[49] = ["Thành phố Hạ Long", "Thành phố Móng Cái", "Thị xã Cẩm Phả", "Thị xã Uông Bí", "Ba Chẽ", "Bình Liêu", "Cô Tô", "Đầm Hà", "Đông Triều", "Hải Hà", "Hoành Bồ", "Quảng Yên", "Tiên Yên", "Vân Đồn"],
    data[50] = ["Thành phố Đông Hà", "Thị xã Quảng Trị", "Cam Lộ", "Cồn Cỏ", "Đăk Rông", "Đảo Cồn Cỏ", "Gio Linh", "Hải Lăng", "Hướng Hóa", "Triệu Phong", "Vĩnh Linh"],
    data[51] = ["Thành phố Sóc Trăng", "Châu Thành", "Cù Lao Dung", "Kế Sách", "Long Phú", "Mỹ Tú", "Mỹ Xuyên", "Ngã Năm", "Thạnh Trị", "Trần Đề", "Vĩnh Châu"],
    data[52] = ["Thành phố Sơn La", "Bắc Yên", "Mai Sơn", "Mộc Châu", "Mường La", "Phù Yên", "Quỳnh Nhai", "Sông Mã", "Sốp Cộp", "Thuận Châu", "Vân Hồ", "Yên Châu"],
    data[53] = ["Thành phố Tây Ninh", "Bến Cầu", "Châu Thành", "Dương Minh Châu", "Gò Dầu", "Hòa Thành", "Tân Biên", "Tân Châu", "Trảng Bàng"],
    data[54] = ["Thành phố Thái Bình", "Đông Hưng", "Hưng Hà", "Kiến Xương", "Quỳnh Phụ", "Thái Thuỵ", "Tiền Hải", "Vũ Thư"],
    data[55] = ["Thành phố Thái Nguyên", "Thị xã Sông Công", "Đại Từ", "Định Hóa", "Đồng Hỷ", "Phổ Yên", "Phú Bình", "Phú Lương", "Võ Nhai"],
    data[56] = ["Thành phố Thanh Hóa", "Thị xã Bỉm Sơn", "Thị xã Sầm Sơn", "Bá Thước", "Cẩm Thủy", "Đông Sơn", "Hà Trung", "Hậu Lộc", "Hoằng Hóa", "Lang Chánh", "Mường Lát", "Nga Sơn", "Ngọc Lặc", "Như Thanh", "Như Xuân", "Nông Cống", "Quan Hóa", "Quan Sơn", "Quảng Xương", "Thạch Thành", "Thiệu Hóa", "Thọ Xuân", "Thường Xuân", "Tĩnh Gia", "Triệu Sơn", "Vĩnh Lộc", "Yên Định"],
    data[57] = ["Thành phố Huế", "Thị xã Hương Thủy", "A Lưới", "Nam Đông", "Phong Điền", "Phú Lộc", "Phú Vang", "Quảng Điền"],
    data[58] = ["Thành phố Mỹ Tho", "Thị xã Gò Công", "Thị xã Cai Lậy", "Cái Bè", "Châu Thành", "Chợ Gạo", "Gò Công Đông", "Gò Công Tây", "Tân Phú Đông", "Tân Phước"],
    data[59] = ["Thành phố Trà Vinh", "Càng Long", "Cầu Kè", "Cầu Ngang", "Châu Thành", "Duyên Hải", "Tiểu Cần", "Trà Cú"],
    data[60] = ["Thành phố Tuyên Quang", "Chiêm Hóa", "Hàm Yên", "Lâm Bình", "Na Hang", "Sơn Dương", "Yên Sơn"],
    data[61] = ["Thành phố Vĩnh Long", "Quận Bình Tân", "Bình Minh", "Long Hồ", "Mang Thít", "Tam Bình", "Trà Ôn", "Vũng Liêm"],
    data[62] = ["Thành phố Vĩnh Yên", "Thị xã Phúc Yên", "Bình Xuyên", "Lập Thạch", "Sông Lô", "Tam Đảo", "Tam Dương", "Vĩnh Tường", "Yên Lạc"],
    data[63] = ["Thành phố Yên Bái", "Thị xã Nghĩa Lộ", "Lục Yên", "Mù Cang Chải", "Trạm Tấu", "Trấn Yên", "Văn Chấn", "Văn Yên", "Yên Bình"];
//
$("#tinh").click(function (){
    if($('#huyen').is(":disabled")){
        $("#tinh").text("");
        for (i = 0; i < 63; i++) {
            $('#tinh').append("<option data-action='"+c[i]+"' class='tinh' value=" + i + ">" + c[i] + "</option>")
        }
    }
});
$("#tinh").change(function getLocation() {
    $("#huyen").prop('disabled', false);
    $("#huyen").text("");
    var index = $("#tinh").val();
    for (i = 0; i < data[index].length; i++) {
        $('#huyen').append("<option data-action='"+data[index][i]+"' value='" + i + "'>" + data[index][i] + "</option>")
    }
});
$("#tinh").change(function () {
    $("#extra-address").prop('disabled', false);
});
$("#extra-address").keyup(
    function () {
        var dis = $('#tinh option:selected').text()
        var subdis = $('#huyen option:selected').text()
        var address = $("#extra-address").val()+"-"+subdis+"-"+dis;
        $("#address").val(address);
    }
)
