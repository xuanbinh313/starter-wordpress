// Tạo sẵn block dùng chung
let sharedBlock = document.createElement('div');
sharedBlock.className = 'shadow-1dtv sub-menu rounded-md flex flex-wrap p-[20px]';
sharedBlock.setAttribute('data-v-20128574', '');

sharedBlock.style.display = 'none'; // Ẩn mặc định
document.body.appendChild(sharedBlock); // Thêm vào cuối body
let hideTimer = null;
document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('mouseenter', () => {
        // Hủy ẩn nếu đang chờ
        clearTimeout(hideTimer);
        // Xóa class ở tất cả các item
        document.querySelectorAll('.item').forEach(el => el.classList.remove('item--active'));

        // Thêm class cho item hiện tại
        item.classList.add('item--active');

        // Lấy vị trí để chèn block (sau cha)
        const parent = item.parentElement;
        parent.parentElement.insertBefore(sharedBlock, parent.nextSibling);

        // Cập nhật nội dung block
        sharedBlock.innerHTML = `
                <div data-v-20128574="" class="w-[20%] min-w-[185px] h-fit px-[10px] pt-[5px] pb-[10px] shrink-0"><strong
                        class="text-sm font-bold">${item.textContent}</strong><a
                        href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-iphone" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>iPhone</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-samsung" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Samsung</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-xiaomi" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Xiaomi</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-oppo" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>OPPO</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-vsmart" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Vsmart</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-sony" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Sony</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-vivo" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Vivo</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-huawei" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Huawei</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-asus" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Asus</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-nokia" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Nokia</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-chua-dien-thoai-realme" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>Realme</span> <!----></div>
                    </a><a href="https://dienthoaivui.com.vn/sua-dien-thoai-oneplus" target="_self"
                        class="text-[13px] font-thin text-[#6e6e6e] hover:text-dtv">
                        <div class="py-[3px]"><span>OnePlus</span> <!----></div>
                    </a>
                </div>
            `;
        sharedBlock.style.display = 'block';
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
