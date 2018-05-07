import $ from 'jquery';

class Search{

  //1. describ and create our project
  constructor(){
    this.addSearchHTML();
    this.resultsDiv = $("#search-overlay__results");
    this.openButton = $('.js-search-trigger');
  this.closeButton = $('.search-overlay__close');
  this.searchOverlay = $('.search-overlay');
  this.searchField = $('#search-term');
  this.events();
  this.isOpen = false;
  this.typingTimer;
  this.isSpinnerVisible = false;
  this.previousValue;
  }

  //2. events
  events(){
    this.openButton.on('click',this.openOverlay.bind(this));
    this.closeButton.on('click', this.closeOverlay.bind(this));
    $(document).on('keydown', this.keyPressDispatcher.bind(this));
    this.searchField.on('keyup', this.typingLogic.bind(this));
  }
  //3.methods (function, action)
  typingLogic(){
    if(this.searchField.val() != this.previousValue){
      clearTimeout(this.typingTimer);
      if (this.searchField.val()){
        if(!this.isSpinnerVisible){
          this.resultsDiv.html('<div class="spinner-loader"></div>');
          this.isSpinnerVisible=true;
        }
        this.typingTimer=setTimeout(this.getResults.bind(this), 500);
      } else{
        this.resultsDiv.html('');
        this.isSpinnerVisible = false;
      }


    }

    this.previousValue=this.searchField.val();
  }

  getResults(){
    $.getJSON(universityData.root_url + '/wp-json/university/v1/search?term=' + this.searchField.val(), (e) =>{
      this.resultsDiv.html(`
        <div class="row">
          <div class="one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${e.generalInfo.length ? '<ul class="link-list min-list">' : '<p>No general information for this search</p>'}
              ${e.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a> ${item.type=='post'?`by ${item.authorName}` : ''}</li>`).join('')}
            ${e.generalInfo.length ? '</ul>' : ''}
          </div>
            <div class="one-third">
              <h2 class="search-overlay__section-title">Programs</h2>
              ${e.programs.length ? '<ul class="link-list min-list">' : `<p>No programs for this search <a href="${universityData.root_url}/programs">View all Programs</a></p>`}
                ${e.programs.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
              ${e.programs.length ? '</ul>' : ''}

              <h2 class="search-overlay__section-title">Professors</h2>
              ${e.professors.length ? '<ul class="professor-cards">' : `<p>No professors for this search</p>`}
                ${e.professors.map(item => `
                  <li class="professor-card__list-item">
                    <a class="professor-card" href="${item.permalink}">
                      <img class="professor-card__image" src="${item.thumbnail}" />
                      <span class="professor-card__name">${item.title}</span>
                    </a>
                  </li>
                  `).join('')}
              ${e.professors.length ? '</ul>' : ''}
            </div>
            <div class="one-third">
              <h2 class="search-overlay__section-title">Campuses</h2>
              ${e.campuses.length ? '<ul class="link-list min-list">' : `<p>No campuses for this search <a href="${universityData.root_url}/campuses">View all Campuses</a></p>`}
                ${e.campuses.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
              ${e.campuses.length ? '</ul>' : ''}


              <h2 class="search-overlay__section-title">Events</h2>
              ${e.events.length ? '' : `<p>No events for this search <a href="${universityData.root_url}/events">View all events</a></p>`}
                ${e.events.map(item => `
                  <div class="event-summary">
                    <a class="event-summary__date t-center" href="${item.permalink}">
                      <span class="event-summary__month">${item.month}</span>
                      <span class="event-summary__day">${item.day}</span>
                    </a>
                    <div class="event-summary__content">
                      <h5 class="event-summary__title headline headline--tiny"><a href="${item.permalink}">${item.title}</a></h5>
                      <p>${item.description}<a href="${item.permalink}" class="nu gray">Learn more</a></p>
                    </div>
                      </div>
                      `).join('')}
            </div>
        </div>
        `);
        this.isSpinnerVisible = false;
    });


  }

  keyPressDispatcher(e){
    if (e.keyCode == 83 && !this.isOpen && !$('input, textarea').is(':focus')){
      this.openOverlay();
    } else if (e.keyCode == 27 && this.isOpen){
      this.closeOverlay();
    }
  }

  openOverlay(){
    this.searchOverlay.addClass('search-overlay--active');
    $("body").addClass('body-no-scroll');
    this.searchField.val('');
    setTimeout(function () {
      this.searchField.focus();
    }.bind(this), 301);
    this.isOpen = true;
    return false;
  }

  closeOverlay(){
    this.searchOverlay.removeClass('search-overlay--active');
    $("body").removeClass('body-no-scroll');
    this.isOpen = false;
  }

  addSearchHTML(){
    $("body").append(`
      <div class="search-overlay">
        <div class="seacrh-overlay__top">
          <div class="container">
            <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
            <input type="text" class="search-term" placeholder="what are u looking for?" id="search-term"/>
            <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
          </div>
        </div>

        <div class="container">
          <div id="search-overlay__results">
          </div>
        </div>
      </div>
      `)
  }


}

export default Search;
