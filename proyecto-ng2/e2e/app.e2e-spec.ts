import { ProyectoNg2Page } from './app.po';

describe('proyecto-ng2 App', function() {
  let page: ProyectoNg2Page;

  beforeEach(() => {
    page = new ProyectoNg2Page();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
