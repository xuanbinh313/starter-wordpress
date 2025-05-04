// Tạo sẵn block dùng chung
let sharedBlock = document.createElement('div');
sharedBlock.className = 'shadow-1dtv sub-menu rounded-md flex flex-wrap p-[20px]';
sharedBlock.setAttribute('data-v-20128574', '');

sharedBlock.style.display = 'none'; // Ẩn mặc định
document.body.appendChild(sharedBlock); // Thêm vào cuối body
let hideTimer = null;
// Recursively render multi-level menu as JSON
function renderMenuItems(parentId, menu_items) {
    const items = menu_items.filter(item => item.menu_item_parent === parentId.toString());
    if (items.length === 0) return [];
    return items.map(item => ({
        id: item.ID,
        title: item.title,
        url: item.url,
        children: renderMenuItems(item.ID, menu_items)
    }));
}
document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('mouseenter', () => {
        console.log(item.getAttribute('data-id'));
        // Hủy ẩn nếu đang chờ
        clearTimeout(hideTimer);
        // Xóa class ở tất cả các item
        document.querySelectorAll('.item').forEach(el => el.classList.remove('item--active'));

        // Thêm class cho item hiện tại
        item.classList.add('item--active');

        // Lấy vị trí để chèn block (sau cha)
        const parent = item.parentElement;
        parent.parentElement.insertBefore(sharedBlock, parent.nextSibling);
        console.log(window.menu_items)
        const id = item.getAttribute('data-id');
        const content = renderMenuItems(id, window.menu_items);
        console.log(content)
        const result = content.map(item => `
            <div data-v-20128574="" class="w-[20%] min-w-[185px] h-fit px-[10px] pt-[5px] pb-[10px] shrink-0">
                <strong class="text-sm font-bold">${item.title}</strong>
                ${item.children.map(child => `
                    <a href="${child.url}" target="_self" class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>${child.title}</span></div>
                    </a>
                `).join('')}
            </div>
            
            `)
        // Lấy vị trí của item để căn chỉnh block
        // Cập nhật nội dung block
        sharedBlock.innerHTML = result.join('');
       
        sharedBlock.style.display = 'flex';
    });

    item.addEventListener('mouseleave', () => {
        // (Không cần xóa block ngay để không mất khi rê vào block)
        // Có thể dùng timeout nếu muốn ẩn chậm hơn
        hideTimer = setTimeout(() => {
            sharedBlock.style.display = 'none';
            item.classList.remove('item--active');
        }, 150);
    });
});
// Khi chuột vào block → hủy ẩn
sharedBlock.addEventListener('mouseenter', () => {
    clearTimeout(hideTimer);
});
// Ẩn block khi rê chuột ra ngoài nó
sharedBlock.addEventListener('mouseleave', () => {
    sharedBlock.style.display = 'none';
    document.querySelectorAll('.item').forEach(el => el.classList.remove('item--active'));
});
