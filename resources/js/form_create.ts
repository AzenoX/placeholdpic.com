export function updateField(el: Element, value: string): void {
    (<HTMLInputElement> el).innerHTML = encodeURI(value);
}
