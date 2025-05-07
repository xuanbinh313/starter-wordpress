// build-blocks.js
const { execSync } = require("child_process");
const fs = require("fs");
const path = require("path");

// Đường dẫn thư mục blocks
const blocksDir = path.join(__dirname, "blocks");
// Tìm tất cả các thư mục con trong blocks có file index.js
const blockFolders = fs.readdirSync(blocksDir).filter((folder) => {
    const indexPath = path.join(blocksDir, folder, "index.js");
    return fs.existsSync(indexPath);
});
console.log(`🔍 Looking for blocks in: `,blockFolders);

// Build từng block
blockFolders.forEach((folder) => {
    const blockPath = path.join(blocksDir, folder);
    console.log(`🔨 Building block: ${folder}...`);
    const command = process.env.NODE_ENV === "development"
        ? `wp-scripts start blocks/${folder}/index.js --output-path=${blockPath}/build`
        : `wp-scripts build blocks/${folder}/index.js --output-path=${blockPath}/build`;
    
    execSync(command, { stdio: "inherit" });
});

console.log("✅ All blocks processed successfully.");
