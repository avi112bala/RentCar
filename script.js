function showNextSection(sectionNumber) {
    for (let i = 1; i <= 3; i++) {
        const section = document.getElementById(`container4${i}`);
        if (i === sectionNumber) {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    }
}
