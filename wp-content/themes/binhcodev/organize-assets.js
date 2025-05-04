const fs = require('fs');
const path = require('path');

const ROOT_DIR = './assets'; // Thư mục gốc
const FILE_TYPES = {
  css: ['.css'],
  js: ['.js'],
  images: ['.jpg', '.jpeg', '.png', '.gif', '.svg', '.webp'],
};

// Tạo thư mục nếu chưa có
function ensureDir(dir) {
  if (!fs.existsSync(dir)) fs.mkdirSync(dir);
}

// Di chuyển file theo loại
function moveFiles(dir = ROOT_DIR) {
  fs.readdirSync(dir).forEach(file => {
    const filePath = path.join(dir, file);
    if (fs.statSync(filePath).isDirectory()) return;

    const ext = path.extname(file).toLowerCase();
    for (const [folder, types] of Object.entries(FILE_TYPES)) {
      if (types.includes(ext)) {
        const targetDir = path.join(ROOT_DIR, folder);
        ensureDir(targetDir);
        const newPath = path.join(targetDir, file);
        fs.renameSync(filePath, newPath);
        console.log(`Moved ${file} → ${folder}/`);
        break;
      }
    }
  });
}

moveFiles();
