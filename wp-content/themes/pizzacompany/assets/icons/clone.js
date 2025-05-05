const https = require("https");
const fs = require("fs");
const path = require("path");

// Tạo thư mục nếu chưa có
const locationFolder = ""
const nameFile = "remixicon"
const dir = path.join(__dirname, locationFolder);
if (!fs.existsSync(dir)) {
  fs.mkdirSync(dir, { recursive: true });
}

const baseURL = `https://thepizzacompany.vn/Themes/Emporium/Content/icons/${nameFile}`;
const fontExtensions = [
  "eot?v=3.5.94",
  "eot?#iefix&v=3.5.94",
  "woff2?v=3.5.94",
  "woff?v=3.5.94",
  "ttf?v=3.5.94",
  "svg?v=3.5.94"
];

fontExtensions.forEach(ext => {
  const cleanExt = ext.split("?")[0].split("#")[0];
  const filename = `${nameFile}.${cleanExt}`;
  const filePath = path.join(dir, filename);
  const url = `${baseURL}.${ext}`;

  console.log(`🔄 Đang tải: ${url}`);
  https.get(url, res => {
    if (res.statusCode === 200) {
      const fileStream = fs.createWriteStream(filePath);
      res.pipe(fileStream);
      fileStream.on("finish", () => {
        fileStream.close();
        console.log(`✅ Đã lưu: ${filePath}`);
      });
    } else {
      console.log(`❌ Lỗi: ${res.statusCode} - ${url}`);
    }
  }).on("error", err => {
    console.log(`❌ Lỗi tải ${url}: ${err.message}`);
  });
});
